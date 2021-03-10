<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="okvir">
        <?php include("header.php"); ?>
            <div id="admin-okvir">
                <div id="prvi-red">
                    <div class="admin-proizvod">
                        <h1>Proizvod</h1>
                        <form action="" id="formProizvod">
                            <div class="form-control fp">
                                <label>Izaberi proizvod</label>
                                <select name="" id="">

                                </select>
                            </div>
                            <div class="form-control fp">
                                <label>Naziv</label>
                                <input type="text" name="nazivProd" id="nazivProd"/>
                            </div>
                            <div class="form-control fp">
                                <label>Kategorija</label>
                                <select>
                                    
                                </select>
                            </div>
                            <div class="form-control fp">
                                <label>Cena</label>
                                <input type="text" name="cenaProd" id="cenaProd"/>
                            </div>
                            <div class="form-control fp">
                                <label>Proizvodjac</label>
                                <input type="text" name="proizvodjacProd" id="proizvodjacProd"/>
                            </div>
                            <div class="form-control fp">
                                <label>Slika</label>
                                <select name="" id="">

                                </select>
                            </div>
                            <input type="button" name="btnInsert" id="btnInsert" value="insert"/>
                            <input type="button" name="btnUpdate" id="btnUpdate" value="update"/>
                            <input type="button" name="btnDelete" id="btnDelete" value="delete"/>
                        </form>
                    </div>
                    <div class="admin-akcija">
                        <h1>Akcija</h1>
                        <form action="" id="formAkcija">
                            <div class="form-control fp">
                                <label>Izaberi akciju</label>
                                <select name="" id="">

                                </select>
                            </div>
                            <div class="form-control fp">
                                <label>Naziv akcije</label>
                                <input type="text" name="nazivAk" id="nazivAk"/>
                            </div>
                            <div class="form-control fp">
                                <label>Opis</label>
                                <input type="text" name="opisAk" id="opisAk"/>
                            </div>
                            <div class="form-control fp">
                                <label>Popust</label>
                                <select>
                                    <option value="1">Select</option>
                                    <option value="2">10%</option>
                                    <option value="3">20%</option>
                                    <option value="4">30%</option>
                                    <option value="5">50%</option>
                                </select>
                            </div>
                            <input type="button" name="btnInsert" id="btnInsert" value="insert"/>
                            <input type="button" name="btnUpdate" id="btnUpdate" value="update"/>
                            <input type="button" name="btnDelete" id="btnDelete" value="delete"/>
                        </form>
                    </div>
                    <div class="admin-proizvod-na-akciji">
                        <h1>Proizvod na akciji</h1>
                        <form action="" id="formProdAction">
                            <div class="form-control fp">
                                <label>Izaberi proizvod</label>
                                <select name="" id="">

                                </select>
                            </div>
                            <div class="form-control fp">
                                <label>Izaberi akciju</label>
                                <select name="" id="">

                                </select>
                            </div>
                            <input type="button" name="btnInsert" id="btnInsert" value="insert"/>
                            <input type="button" name="btnUpdate" id="btnUpdate" value="update"/>
                            <input type="button" name="btnDelete" id="btnDelete" value="delete"/>
                        </form>
                    </div>
                </div>
                <div id="drugi-red">
                    <div class="unesi-sliku">
                        <form action="" id="formSlika">
                            <h1>Slika za proizvod</h1>
                            <div class="form-control fp">
                                <label>Naziv</label>
                                <input type="text" name="nazivSlike" id="nazivSlike"/>
                            </div>
                            <div class="form-control fp">
                                <label>Putanja slike</label>
                                <input type="text" name="putanjaSlike" id="putanjaSlike"/>
                            </div>
                            <div class="form-control fp">
                                <input type="file" name="slika" id="slika"/>
                            </div>
                            <input type="button" name="btnInsert" id="btnInsert" value="insert"/>
                            <input type="button" name="btnUpdate" id="btnUpdate" value="update"/>
                            <input type="button" name="btnDelete" id="btnDelete" value="delete"/>
                        </form>
                    </div>
                </div>
            </div>
        <div class="cistac"></div>
        <?php include("footer.php"); ?>
    </div>
</body>
</html>