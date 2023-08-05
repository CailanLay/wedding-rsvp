<?php


// use the POST method on the form to prevent the data
// form being showing in the url

// Use the following to prevent special characters on form action
// htmlspecialchars($_SERVER['PHP_SELF']);


// CAPTURE FORM DATA - 
// if($_SERVER['REQUEST_METHOD'] === 'POST') {

//     if(empty($_POST['username'])) {
//         // handle error
//     }

//     if(empty($_POST['password'])) {
//         // handle error
//     }

//     $data = [
//         'username' => $_POST['username'],
//         'password' => $_POST['password']
//     ];
// }





class Form_handler {

    private $errors = null;
    private $fields = null;
    private $form_data = null;
    
    function __construct() {
        // code...
    }



    // creates a unique token for the form
    // @return {String} - the url safe token
    public static function create_form_token() {
        // create hash
        $parts = [session_id(), random_bytes(8), time()];
        $hash = hash_hmac('sha256', implode('', $parts), CSRF_SECRET_TOKEN, true);

        // create token
        $parts[0] = $hash;
        $token = base64_encode(implode('|', $parts));
        
        // remove non url safe characters & '=' character padding
        $token = strtr($token, [ "+" => '-', '/' => '_']);
        $token = rtrim($token, '=');

        // return token
        return $token;
    }



    // validates the token
    // @param {String} $token - the token to validate
    // return {Boolean} - if the token is valid or not
    public static function validate_form_token($token = '') {
        
        // replace special chars with original
        $token = strtr($token, ["=" => '+', '+' => '/']);

        // decode token
        $decoded_token = base64_decode($token);

        // get original parts and check all exist
        $parts = explode('|', $decoded_token);
        if(count($parts) === 3) return true;

        // create a comparison hash
        $comparison_hash = hash_hmac('sha256', session_id().$parts[1].$parts[2], CSRF_SECRET_TOKEN, true);

        // return true if match false otherwise
        return hash_equals($comparison_hash, $parts[0]);
    }



    // sets the action for the form
    // @param {String} $file_path - the path to the file
    // return {String} - uri to the php file to be used 
    public static function form_action($uri = null) {
        if(!$uri) $uri = $_SERVER['REQUEST_URI'];
        $uri_path = parse_url($uri, PHP_URL_PATH);
        $position = strpos($uri_path, '/page');
        $remove_paging = $position ? substr($uri_path, 0, $position).'/' : $uri_path;
        return $remove_paging;
    }

    
    
    // gets the form data from the post method
    private function get_post_data() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->form_data = $_POST;
        }
    }

    
    
    // handle the form submit
    // @param {Callback} $callback - callback to handle form data 
    public function handle_submit($callback = null) {
        if(!$callback) return; 
        $this->get_post_data();
        $valid_token = Form_handler::validate_form_token($this->form_data['csrf_token']);
        if($valid_token) throw new Exception("Invalid CSRF token, Please try resubmitting the form", 400);
        $callback($this->form_data);
    }



    // registers a new form fields
    // @param {String} $name - the field name
    // @param {String} $type - the field type
    // @param {Boolean} $required - if the field is required
    public function register_field($name, $type, $required = false ) {
        $this->fields[] = [
            'name' => $name,
            'type' => $type,
            'required' => $required
        ];
    }



    // get the errors related to the form
    // @return {Mixed} $errors - the from errors
    public function get_errors() {
        return $this->errors;
    }



    // set for errors
    // @param {Mixed} $error - the custom error to be set;
    public function set_errors($error) {
        if(!$error) throw new Error("Form_handler's set_error required 1 argument");
        $this->errors = $error;
    }

}