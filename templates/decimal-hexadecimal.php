<?php
    template('header', array(
        'title' => 'Boite à outils • Décimal - Hexadécimal',
    ));
?>

<section id="homepage" class="homepage">
    <div class="container w-75">
        <div class="section-title">
            <h2>Convertisseur système décimal positif en binaire </h2>
        </div>

        <div class="row">
            <figure class="bg-light rounded p-3">
                <blockquote cite="https://www.huxley.net/bnw/four.html">
                    <p>
                        Le système binaire (du latin binārĭus, « double ») est le système de numération utilisant la base 2. On nomme couramment bit (de l'anglais binary digit, soit « chiffre binaire ») les chiffres de la numération binaire positionnelle. Un bit peut prendre deux valeurs, notées par convention 0 et 1.
                    </p>   <p>
                        Le système binaire est utile pour représenter le fonctionnement de l'électronique numérique utilisée dans les ordinateurs. Il est donc utilisé par les langages de programmation de bas niveau.
                    </p>
                </blockquote>
                <figcaption><cite><a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_binaire">Wikipedia</a></cite></figcaption>
            </figure>
        </div>

        <div class="row">
            <fieldset class="col-6 mt-4">
                <legend>Convertisseur</legend>
                <form action="" name="decimal-hexadecimal">
                    <div class="form-group row my-4">
                        <div class="col-12 my-2">
                            <label for="decimal">Décimal</label>
                            <div class="input-group">
                                <input id="decimal" name="decimal" type="number" min="0" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 my-2">
                            <label for="hex">Héxadécimal</label>
                            <div class="input-group">
                                <input id="hex" name="hex" type="text"  class="form-control" disabled>
                            </div>
                        </div>

                        <div class="col-12 my-2">
                            <label for="binary">Binaire</label>
                            <div class="input-group">
                                <input id="binary" name="binary" type="text" min="0" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-2 my-lg-0 my-3">
                                    <button name="submit" type="submit" class="btn btn-primary btn-block">Calculer</button>
                        </div>
                </form>
            </fieldset>
            </div>
        </div>
</section>



    <script type="text/javascript">
        window.addEventListener('load', () => {
        let forms = document.forms;

        for(form of forms){
            form.addEventListener('submit', async (event) => {
                event.preventDefault();

                const formData = new FormData(event.target).entries()
                

                const response = await fetch('/api/post', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(
                        Object.assign(Object.fromEntries(formData), {form: event.target.name})
                    )
                });
                

                const result = await response.json();

                
                
                let inputName = Object.keys(result.data[0])[0];
                let inputNameTwo = Object.keys(result.data[1])[0];

                console.log(response);

                event.target.querySelector(`input[name="${inputName}"]`).value = result.data[0][inputName];
                event.target.querySelector(`input[name="${inputNameTwo}"]`).value = result.data[1][inputNameTwo];


        });
    }
    });
    </script>

<?php template('footer');
