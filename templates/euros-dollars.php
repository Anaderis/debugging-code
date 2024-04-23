<?php
template('header', array(
    'title' => 'Boite à outils • Devise',
));

$json_data = file_get_contents('https://open.er-api.com/v6/latest/USD');
$data = json_decode($json_data, true);

if ($data && isset($data['rates'])) {
    $rates = $data['rates'];

    // Récupérer les noms de devises
    $currencies = array_keys($rates);
?>

    <!-- ======= About Section ======= -->
    <section id="homepage" class="homepage">
        <div class="container w-75">
            <div class="section-title">
                <h2>Convertisseur de devise</h2>
            </div>

            <div class="row">

                <fieldset class="col-12 mt-5">
                <legend>Choisissez vos devises</legend>
                <form action="" method="post" name="currency-choice">
                    <div class="form-group row my-3">
                        <div class="col-lg-4 my-lg-0 my-3">
                            <label for="money" aria-hidden="true" hidden>Montant</label>
                            <div class="input-group">
                                <input id="money" name="money" type="text" class="form-control" required>
                                <div class="input-group-append">
                                <?php  
                                    echo '<select class="form-select" name="currency1" aria-label="Devise 1">';
                                        foreach ($currencies as $currency) {
                                            echo '<option value="' . $currency . '">' . $currency . '</option>';
                                        }
                                    echo '</select>';
                                ?>                                   
                                </div>
                            </div>
                        </div>
                        <div class="d-inline-flex align-items-center col-lg-2 my-lg-0 my-3">
                            <span class="ver">vaut actuellement</span>
                        </div>
                        <div class="col-lg-4 my-lg-0 my-3">
                            <label for="result" aria-hidden="true" hidden>Résultat</label>
                            <div class="input-group">
                                <input id="result" name="result" type="text" class="form-control" disabled>
                                <div class="input-group-append">
                                <?php  
                                    echo '<select class="form-select" name="currency2" aria-label="Devise 2">';
                                        foreach ($currencies as $currency) {
                                            echo '<option value="' . $currency . '">' . $currency . '</option>';
                                        }
                                    echo '</select>';
                                    } 
                                ?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 my-lg-0 my-3">
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

                event.target.querySelector(`input[name="result"]`).value = result.data[inputName];
        });
    }
    });
    </script>

<?php template('footer');
