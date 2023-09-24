<?php 

// template name: RSVP

get_header();

if(!empty($_POST)) {
    try {
        $Form = new Form_handler;
        $Form->handle_submit(function($data) {
            // code...
        });
    } catch(Exception $ex) {
        // handle error...
    }
} else {
    $guest_query = new WP_Query([
        'post_type' => 'guest',
        'posts_per_page' => -1
    ]);
}

?>

<section class="HERO">
    <div class="frame">

        <div class="image">
            <img src="<?= get_template_directory_uri().'/assets/logo.svg' ?>" alt="">
        </div>

        <a class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <polyline points="19 12 12 19 5 12"></polyline>
            </svg>
        </a>

    </div>
</section>

<section>
    <div class="frame">
        <?php if(empty($_POST)) { ?>
        <form action="<?php echo Form_handler::form_action() ?>" method="POST">
            <input type="hidden" name="csrf_token" value="<?= Form_handler::create_form_token() ?>">

            <div class="input alt-select">
                <label class='label' for='primary_guest'>Guest name</label>
                <select name="primary_guest" id="primary_guest">
                    <?php foreach($guest_query->posts as $guest) { ?>
                        <option value="<?= $guest->post_name ?>"><?= $guest->post_title ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="input alt-radio-group">
                <p class='label'>Will you be attending?</p>
                <label>
                    <input type="radio" name="attendance" value="yes">
                    <span>Yes</span>
                </label>
                <label>
                    <input type="radio" name="attendance" value="no">
                    <span>No</span>
                </label>
            </div>

            <div class="input">
                <input class='alt-filled' type="submit" value="Submit">
            </div>

        </form>
        <?php } else { ?>
            <?php print('<pre>'.print_r($_POST, true).'</pre>'); ?>
        <?php } ?>

    </div>
</section>


<?php get_footer(); ?>