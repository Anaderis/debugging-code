<?php

session_start();

template('header', array(
    'title' => 'Boite à outils • Accueil',
)
);

$messages = [];
// Send contact form to database
if (!empty($_POST)) {

    // if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']) && isset($_POST['submit'])) {
    //check if === ""
    //  break
    //else
    //  code envoi mail

    $submited_items = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
    );


    $validated_items = validate($submited_items, array(
        'name' => array(
            'label' => 'Name',
            'required' => true,
            'sanitize' => 'string',
            'min' => 2,
            'regexp' => '/^[a-zA-Z0-9]+$/'
        ),
        'email' => array(
            'label' => 'Email',
            'required' => true,
            'sanitize' => 'email',
        ),
        'subject' => array(
            'label' => 'Subject',
            'required' => true,
            'sanitize' => 'string',
        ),
        'message' => array(
            'label' => 'Message',
            'required' => true,
            'sanitize' => 'string',
        )
    )
    );

    $result = check_validation($validated_items);

    if (!is_passed($result)) {
        $messages = $result;
    } else {
        if (insert('admin_messages', $result)) {
            $messages['success'][] = 'Message envoyé !';
        }
    }

    $to = "anais.kajjaj@outlook.fr";
    $subject = $result['subject'];
    $message = $result['message'];
   
    
    
    mail(
            $to, $subject, $message
        );

    redirect('/home', $status_code = 303);


   

}



?>

<!-- ======= About Section ======= -->
<section id="homepage" class="homepage">
    <div class="container w-75">
        <div class="section-title">
            <h2>La boite à outils </h2>
            <p>La boite à outils est un site accessible 24h/24 et 7j/7 qui vous permet de réaliser un bon nombre de
                calculs ou transformations nécessaires au quotidien</p>

            <p>Transformer 1/4 de litres en millilitres ou encore convertir des euros en dollars n'a jamais été aussi
                simple !</p>
        </div>

        <?php getAlert($messages);
        ?>

        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 content">
                <h3>Il vous manque une fonctionnalité ?</h3>
                <p class="fst-italic">
                    Écrivez-nous grâce au formulaire de contact et nous vous répondrons dans les plus brefs délais.
                </p>
                <form id="contact-form" name="contact-form" method="POST">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Votre nom</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Votre email (pour vous répondre)</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Objet</label>
                                <input type="text" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Votre demande</label>
                                <textarea id="message" name="message" rows="5"
                                    class="form-control md-textarea"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    J'accepte que mes données soient utilisées dans le cadre de demande de
                                    fonctionnalité
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center text-md-start">
                                <input type="submit" name="submit-register" value="Register" class="btn  btn-block btn-primary">
                                <!-- <button type="submit" class="btn  btn-block btn-primary">Envoyer</button> -->

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section><!-- End Home Section -->


<?php 

// session_destroy();

template('footer');
