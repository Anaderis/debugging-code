<?php
template('header', array(
    'title' => 'Boite à outils • Devise',
));
?>

    <!-- ======= About Section ======= -->
    <section id="homepage" class="homepage">
        <div class="container w-75">
            <div class="section-title">
                <h2>Convertisseur de devise</h2>
            </div>

            <div class="row">

                <fieldset class="col-12 mt-4">
                    <legend>Euro vers dollar américain</legend>
                    <form action="" method="post" name="euros-dollars">
                        <div class="form-group row my-3">
                            <div class="col-4">
                                <label for="EUR" aria-hidden="true" hidden>Euros</label>
                                <div class="input-group w-100">
                                    <input id="EUR" name="EUR" type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">€</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-inline-flex align-items-center col-2">
                                <span class="ver">vaut actuellement</span>
                            </div>

                            <div class="col-4">
                                <label for="USD" aria-hidden="true" hidden>Dollars</label>
                                <div class="input-group w-100">
                                    <input id="USD" name="USD" type="text" class="form-control" disabled>
                                    <div class="input-group-append">
                                        <div class="input-group-text">$</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button name="submit" type="submit" class="btn btn-primary btn-block w-100">Calculer</button>
                            </div>

                            <!--https://fr.calcuworld.com/calculs-mathematiques/calculatrice-pourcentage/-->
                        </div>
                    </form>
                </fieldset>

                <fieldset class="col-12 mt-5">
                    <legend>Test Currency</legend>
                    <form action="" method="post" name="currency-choice">
                        <div class="form-group row my-3">
                            <div class="col-4">
                                <label for="money" aria-hidden="true" hidden>Montant</label>
                                <div class="input-group">
                                    <input id="money" name="money" type="text" class="form-control" required>
                                    <div class="input-group-append">
                                        <select class="form-select" name="currency1" aria-label="Devise 1">
                                            <option value="USD">USD</option>
                                            <option value="CAD">CAD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="DIR">DIR</option>
                                        </select>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center col-2">
                                <span class="ver">vaut actuellement</span>
                            </div>
                            <div class="col-4">
                                <label for="result" aria-hidden="true" hidden>Résultat</label>
                                <div class="input-group">
                                    <input id="result" name="result" type="text" class="form-control" disabled>
                                    <div class="input-group-append">
                                        <select class="form-select" name="currency2" aria-label="Devise 2">
                                            <option value="USD">USD</option>
                                            <option value="CAD">CAD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="DIR">DIR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button name="submit" type="submit" class="btn btn-primary btn-block w-100">Calculer</button>
                            </div>
                        </div>
                    </form>
                </fieldset>

                </div>
            </div>
    </section> <!-- End Home Section -->


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
