<?php
session_start();
if (empty($_SESSION['loggeduser']) || $_SESSION['loggeduser'][1] == "2") {

    header('Location: index.php');
    exit();
}
include("control/Controler.php");
$ctrl = Controler::getInstance();
?>
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
                    <form action="proizvodAdmin.php" id="formProizvod" method="post">
                        <div class="form-control fp">
                            <label>Izaberi proizvod</label>
                            <select name="proizvodiIzbor" id="proizvodiIzbor">
                            <option value="" selected="selected" disabled></option>
                                <?php

                                $proizvodi = $ctrl->getProizvod();
                                while ($red = $proizvodi->fetch_object()) :

                                ?>
                                    <option value="<?php echo $red->ID; ?>"><?php echo $red->naziv; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-control fp">
                            <label>Naziv</label>
                            <input type="text" name="nazivProd" id="nazivProd" />
                        </div>
                        <div class="form-control fp">
                            <label>Kategorija</label>
                            <select name="kategorijaIzbor" id="kategorijaIzbor">
                            <option value=""  selected="selected" disabled></option>

                                <?php

                                $kategorije = $ctrl->getKategorija();
                                while ($red = $kategorije->fetch_object()) :

                                ?>
                                    <option value="<?php echo $red->ID; ?>"><?php echo $red->naziv; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-control fp">
                            <label>Cena</label>
                            <input type="text" name="cenaProd" id="cenaProd" />
                        </div>
                        <div class="form-control fp">
                            <label>Proizvodjac</label>
                            <input type="text" name="proizvodjacProd" id="proizvodjacProd" />
                        </div>
                        <div class="form-control fp">
                            <label>kvantitet</label>
                            <input type="text" name="kvantitetProd" id="kvantitetProd" />
                        </div>
                        <div class="form-control fp">
                            <label>Slika</label>
                            <select name="slikaIzbor" id="slikaIzbor">
                            <option value="" selected="selected" disabled></option>

                                <?php

                                $slike = $ctrl->getSlika();
                                while ($red = $slike->fetch_object()) :

                                ?>
                                    <option value="<?php echo $red->id; ?>"> <?php echo "slika ID- " . $red->id . " , naziv- " . $red->naziv; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <input type="submit" name="btnInsertProiz" id="btnInsert" value="insert" />
                        <input type="submit" name="btnUpdateProiz" id="btnUpdate" value="update" />
                        <input type="submit" name="btnDeleteProiz" id="btnDelete" value="delete" />
                    </form>
                </div>
                <div class="admin-akcija">
                    <h1>Akcija</h1>
                    <form action="akcijaAdmin.php" id="formAkcija" method="post">
                        <div class="form-control fp">
                            <label>Izaberi akciju</label>
                            <select name="akcijaIzbor" id="akcijaIzbor">
                            <option value="" selected="selected" disabled></option>

                                <?php

                                $akcije = $ctrl->getAkcija();
                                while ($red = $akcije->fetch_object()) :

                                ?>
                                    <option value="<?php echo $red->id; ?>"> <?php echo $red->naziv; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-control fp">
                            <label>Naziv akcije</label>
                            <input type="text" name="nazivAk" id="nazivAk" />
                        </div>
                        <div class="form-control fp">
                            <label>Opis</label>
                            <input type="text" name="opisAk" id="opisAk" />
                        </div>
                        <div class="form-control fp">
                            <label>Popust</label>
                            <input type="text" name="popustAk" id="popustAk" />
                        </div>
                        <div class="form-control fp">
                            <label for="startAk">Početak akcije:</label>

                            <input type="date" id="startAk" name="akcija-start" value="2020-03-02" min="2020-01-01" max="2020-12-31">
                        </div>
                        <div class="form-control fp">
                            <label for="endAk">Kraj akcije:</label>

                            <input type="date" id="endAk" name="akcija-end" value="2020-03-02" min="2020-01-01" max="2020-12-31">
                        </div>
                        <input type="submit" name="btnInsertAk" id="btnInsert" value="insert" />
                        <input type="submit" name="btnUpdateAk" id="btnUpdate" value="update" />
                        <input type="submit" name="btnDeleteAk" id="btnDelete" value="delete" />
                    </form>
                </div>
                <div class="admin-proizvod-na-akciji">
                    <h1>Proizvod na akciji</h1>
                    <form action="PAobrada.php" id="formProdAction" method="post">
                        <div class="form-control fp">
                            <label>Izaberi proizvod</label>
                            <select name="PAProizvod" id="PAProizvod">
                            <option value="" selected="selected" disabled></option>

                                <?php
                                $proizvodi = $ctrl->getProizvod();

                                while ($red = $proizvodi->fetch_object()) :
                                ?>
                                    <option value="<?php echo $red->ID; ?>"><?php echo $red->naziv; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-control fp">
                            <label>Izaberi akciju</label>
                            <select name="PAAkcija" id="PAAkcija">
                            <option value="" selected="selected" disabled></option>

                                <?php

                                $akcije = $ctrl->getAkcija();
                                while ($red = $akcije->fetch_object()) :

                                ?>
                                    <option value="<?php echo $red->id; ?>"> <?php echo $red->naziv; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <input type="submit" name="btnInsertAKP" id="btnInsert" value="insert" />
                    </form>
                </div>
            </div>
            <div id="drugi-red">
                <div class="unesi-sliku">
                    <form action="slikaupload.php" id="formSlika" method="post" enctype="multipart/form-data" name="formSlikaUpload">
                        <h1>Slika za proizvod</h1>
                        <div class="form-control fp">
                            <label>Naziv</label>
                            <input type="text" name="nazivSlike" id="nazivSlike" />
                        </div>

                        <div class="form-control fp">
                            <input type="file" name="slikaUpload" id="slikaUpload" />
                        </div>
                        <input type="submit" name="btnInsert" id="btnInsert" value="insert" />

                    </form>
                </div>
            </div>
        </div>
        <div class="cistac"></div>
        <?php include("footer.php"); ?>
        <script type="text/javascript" src="js/meni.js"></script>

    </div>
</body>
</html>