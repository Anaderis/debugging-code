<?php
template('header', array(
    'title' => 'Boite à outils • Devise',
));
?>

    <!-- ======= About Section ======= -->
    <section id="homepage" class="homepage">
        <div class="container w-75">
            <div class="section-title">
                <h2>Conversion litre</h2>
            </div>

            <div class="row">

                <fieldset class="col-12 mt-4">
                    <legend>MilliLitre vers Litre</legend>
                    <form action="" method="post" name="ml-litre">
                        <div class="form-group row">
                            <div class="col">
                                <label for="ml" aria-hidden="true" hidden>ml</label>
                                <div class="input-group">
                                    <input id="ml" name="ml" type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">ml</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-inline-flex align-items-center ">
                                <span class="ver">vaut actuellement</span>
                            </div>

                            <div class="col">
                                <label for="litre" aria-hidden="true" hidden>litre</label>
                                <div class="input-group">
                                    <input id="litre" name="litre" type="text" class="form-control" disabled>
                                    <div class="input-group-append">
                                        <div class="input-group-text">L</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Calculer</button>
                            </div>

                            <!--https://fr.calcuworld.com/calculs-mathematiques/calculatrice-pourcentage/-->
                        </div>
                    </form>
                </fieldset>

                <fieldset class="col-12 mt-4">
                    <legend>Litre ver MilliLitre</legend>
                    <form action="" method="post" name="ml-litre">
                        <div class="form-group row">
                            <div class="col">
                                <label for="litre" aria-hidden="true" hidden>litre</label>
                                <div class="input-group">
                                    <input id="litre" name="litre" type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">L</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-inline-flex align-items-center ">
                                <span class="ver">vaut actuellement</span>
                            </div>

                            <div class="col">
                                <label for="ml" aria-hidden="true" hidden>ml</label>
                                <div class="input-group">
                                    <input id="ml" name="ml" type="text" class="form-control" disabled>
                                    <div class="input-group-append">
                                        <div class="input-group-text">ml</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Calculer</button>
                            </div>
                        </div>
                    </form>
                </fieldset>
                </div>
            </div>
    </section><!-- End Home Section -->


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

                let inputName = Object.keys(result.data)[0];

                event.target.querySelector(`input[name="${inputName}"]`).value = result.data[inputName];
        });
    }
    });
    </script>

<?php template('footer');