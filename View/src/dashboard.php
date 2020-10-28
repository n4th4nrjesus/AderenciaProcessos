<?php
include(__DIR__ . '/../../Controller/php/is_logged.php');

$pageTitle = 'Aderência de GRE - dashboard';
include(__DIR__ . '/../inc/header.php');
?>

<div class='container-fluid pt-4'>
    <input type="hidden" id="user-id" value="<?= $_SESSION["usuario_id"]; ?>">
    <div class="row">
        <div class="col-12 p-4">
            <div class="alert alert-info alert-dismissible d-none" id="hundred-alert" role="alert">
                Atenção! Se essa é sua primeira vez no sistema, você precisa atualizar sua checklist de
                <a href="#" class="alert-link" id="alert-use-cases">casos de uso</a>
                ou de
                <a href="#" class="alert-link" id="alert-requirements">requisitos</a>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span style="font-size: 1.5rem" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card bg-light mb-3">
                <h4 class="card-header text-center" id="total-adherence">
                    Aderência total -
                    <svg width="1.5rem" height="1.5rem" viewBox="0 0 16 16" class="bi bi-hourglass-split" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13s-.866-1.299-3-1.48V8.35z" />
                    </svg>
                </h4>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Casos de uso</h5>
                                        <h6 class="card-text text-center" id="use-cases-adherence">
                                            <svg width="1rem" height="1rem" viewBox="0 0 16 16" class="bi bi-hourglass-split" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13s-.866-1.299-3-1.48V8.35z" />
                                            </svg>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Especificações de requisitos</h5>
                                        <h6 class="card-text text-center" id="requirements-adherence">
                                            <svg width="1rem" height="1rem" viewBox="0 0 16 16" class="bi bi-hourglass-split" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13s-.866-1.299-3-1.48V8.35z" />
                                            </svg>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$jsFile = 'dashboard';
include(__DIR__ . '/../inc/footer.php');
?>