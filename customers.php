<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Accounts | Basic Banking System</title>
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/customer.css">
</head>

<body>
    <!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="lamba">
        <img class="bankimg" src="images\Bank.png" alt="sparks">
        <a class="navbar-brand" href="./index.php">The Sparks Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./FAQ.php">FAQs </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home </a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link" href="./customers.html"
                        style="color: rgb(37, 36, 36)!important; background-color: rgb(189, 132, 185);">Send Money</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar ends here  -->

    <div class="my-info text-center" id="acc">
        <h2>Name: Gupta Rupesh</h2>
        <h4>Net Bank Balance: $<span id="myAccountBalance">18000</span></h4>

        <button class="btn btn-info" data-toggle="modal" data-target="#sendMoney">Send Money</button>
        <a class="btn btn-info" href="" data-toggle="modal" data-target="#transactionHistory">See All Transactions</a>
    </div>

    <!-- Modal send money -->
    <div class="modal fade" id="sendMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" id="enterName" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@email.com</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" id="enterAmount" class="form-control" placeholder=" Enter Amount"
                                aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Dismiss</button>
                    <button type="button" onclick="sendMoney()" class="btn btn-outline-success"
                        data-dismiss="modal">Send
                        Money</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal transaction History-->
    <div class="modal fade" id="transactionHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaction History</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol id="transaction-history-body">

                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- table  -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-danger ">
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Bank Balance(in $)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td scope="row">1</td>
                        <td>Nimlesh</td>
                        <td>nimlesh@email.com</td>
                        <td>
                            <p id="nimleshBankBalance">19500</p>
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td scope="row">2</td>
                        <td>Komal</td>
                        <td>komal@email.com</td>
                        <td>
                            <p id="komalBankBalance">34000</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">3</td>
                        <td>Abhishek</td>
                        <td>abhi@email.com</td>
                        <td>
                            <p id="abhiBankBalance">13400</p>
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td scope="row">4</td>
                        <td>Pawan</td>
                        <td>pk@email.com</td>
                        <td>
                            <p id="pkBankBalance">14000</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">5</td>
                        <td>Krishna</td>
                        <td>krishna@email.com</td>
                        <td>
                            <p id="krishnaBankBalance">16300</p>
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td scope="row">6</td>
                        <td>Jhon</td>
                        <td>jhon@email.com</td>
                        <td>
                            <p id="jhonBankBalance">10013</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td>7</td>
                        <td>Sunil</td>
                        <td>sunil@email.com</td>
                        <td>
                            <p id="sunilBankBalance">25600</p>
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td scope="row">8</td>
                        <td>Aryan</td>
                        <td>pilus@email.com</td>
                        <td>
                            <p id="pilusBankBalance">15603</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">9</td>
                        <td>Mrunal</td>
                        <td>mrunal@email.com</td>
                        <td>
                            <p id="mrunalBankBalance">8500</p>
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td scope="row">10</td>
                        <td>Ramu</td>
                        <td>ramu@email.com</td>
                        <td>
                            <p id="ramuBankBalance">8350</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- footer part start here -->
    <div class="footer text-center">
        <div class="footer-copyright">© 2023 Copyright | The Sparks Bank | All Right Reserved. </div>
    </div>
    <!-- Footer  part ends here -->

    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
</body>

</html>