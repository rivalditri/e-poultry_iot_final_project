<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Set Alert</h1>
                            </div>
                            <form class="user" method="POST" action="/config">
                                <div class="form-group row">
                                    <select class="form-control" name="sensor" id="alert">
                                        <option value="temp">Temperature</option>
                                        <option value="hum">Humidity</option>
                                        <option value="gas">Gas</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <input type="text" class="form-control" name="value" id="value" placeholder="value">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Set
                                </button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?= $this->endSection(); ?>