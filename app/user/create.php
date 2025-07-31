<?php
    include 'db.php';

    $userID = $_GET['id'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div id="wrap">
            <div id="left" class="overflow-scroll w-1/2 justify-center display: flex grid grid-cols: 1" style="">
                <?php
                $data = mysqli_query($conn, "SELECT * FROM notepad_data");
                $b = 1;
                foreach ($data as $a){
                    
                ?>
                <div id="box" class="p-4 w-full bg-[#c5ffbf] my-2 rounded-xl" style="display: inline-block; word-wrap: break-word; min-height: 100px;"> 
                    <div id="lowerbox" class="outline-solid">
                        <?php
                            $id = $a['userid'];
                            $data = mysqli_query($conn, "SELECT username FROM user WHERE id='$id'");
                            $user = mysqli_fetch_assoc($data)['username'];
                            $code = rand(1, 5);
                            $color = "";
                            if ($code == 1){
                                $color = "FF0051";
                            }elseif ($code == 2){
                                $color = "FF2F00";
                            }elseif ($code == 3){
                                $color = "FFAE00";
                            }elseif ($code == 4){
                                $color = "00FFAE";
                            }else{
                                $color = "0051FF";
                            };
                        ?>
                        <h1 class="bg-[#<?= $color?>]"><b><?= $user ?></b></h1>
                    </div>
                    <h1><?= $a['content']?></h1>
                    <td><img src="img/<?= $a['decal']?>" alt="" style="width: 2rem; height:2rem;"></td>
                </div>
                <?php
                $b++;
                };
                ?>
            </div>

            

            <div id="right" class="w-1/2 justify-center display: flex flex-direction: column grid grid-cols: 1" style="">
                <div class="text-center pt-24">
                    <h1 class="width: auto height: 50 text-xl"><b>Input Data to Notepad</b></h1>
                </div>
                
                <form action="creation.php" method="post" enctype="multipart/form-data">
                    <div class="bg-[#f2f2f2] rounded-xl p-2 text-[#4d4b4b] mb-2">
                        <label>Header:</label>
                        <input class="bg-[#e8e8e8] rounded-xl text-center"type="text" name="header">
                    </div>
                    <div class="bg-[#f2f2f2] rounded-xl p-2 text-[#4d4b4b] mb-2">
                        <label>Date:</label>
                        <input class="bg-[#e8e8e8] rounded-xl text-center ml-5 w-3/4" type="date" name="date">
                    </div>
                    <div class="bg-[#f2f2f2] rounded-xl p-2 text-[#4d4b4b] mb-2">
                        <label>Content:</label>
                        <input class="bg-[#e8e8e8] rounded-xl text-center" type="text" name="content">
                    </div>
                    <div class="bg-[#f2f2f2] rounded-xl p-2 text-[#4d4b4b] mb-2">
                        <input type="file" name="decal" id="decal">
                    </div>
                    <div>
                        <input type="hidden" name="userID" value="<?=$userID?>">
                    </div>
                    <div>
                        <button class="bg-[#f2f2f2] rounded-xl p-2 text-[#4d4b4b] mb-2 w-full" input="submit" value="Tambahkan Games">Insert Data</button>
                    </div>
                </form>
                <a  href="index.php" class="0"><button class="bg-[#f2f2f2] rounded-xl p-2 text-[#4d4b4b] mb-2 w-full pt--4">Back To Menu</button></a>
            </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>