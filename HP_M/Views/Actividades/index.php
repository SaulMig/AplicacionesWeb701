<?php
?>
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-12">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Animales disponibles para adopción</h5>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Launch demo modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    require_once ("tabla.php");
                    ?>
                </div>
            </div>

        </main>

    </div>
</div>
<br>
<br><br>