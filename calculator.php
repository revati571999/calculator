<!DOCTYPE html>
<html lang="en">
<head>
<?php
   include("head.php");
   ?>

<title>Calci Page</title>
<style>
    

h1{
    margin-left: 200px;
    font-size: 28px;
}
table{
    margin: auto;
}
input{
    border: 5px solid #000000;
    font-size:34px;
    height: 65px;
    width: 456px;
}
button{
    font-size: 40px;
    background: #acacb9;
    width: 90px;
    height: 80px;
    margin: 6px;
}
.calculator{ 
    border: 4px solid #070808;
    background-color: #353034;
    padding: 23px;
    display: inline-block;    
}
.div2{
    
    height: 300px;
    width: 500px;
    /* background-color: pink; */
    float: right;
}
.div2 ul li{
    
    font-family: 'Courier New', Courier, monospace;
    list-style-type: none;
}
</style>
</head>
<body>
<header>
    <?php
    include("nav.php");
    ?>
    </header>
    <section class="p-2"></section>
    
    <div class="container justify-content-center">
        <div class="row p-4 m-2">

            <div class="col-6 div1">
                
                <h1>Calculator</h1>
                
                <div class="calculator">
    
                        
                        <input type="text" name="screen" id="screen" readonly>
                        <table>
                            <tr>
                                <td><button>(</button></td>
                                <td><button>)</button></td>
                                <td><button>C</button></td>
                                <td><button val="**">^</button></td>
                            </tr>
                            <tr>
                                <td><button>7</button></td>
                                <td><button>8</button></td>
                                <td><button>9</button></td>
                                <td><button>*</button></td>
                            </tr>
                            <tr>
                                <td><button>4</button></td>
                                <td><button>5</button></td>
                                <td><button>6</button></td>
                                <td><button>-</button></td>
                            </tr>
                            <tr>
                                <td><button>1</button></td>
                                <td><button>2</button></td>
                                <td><button>3</button></td>
                                <td><button>+</button></td>
                            </tr>
                            <tr>
                                <td><button>0</button></td>
                                <td><button>.</button></td>
                                <td><button>/</button></td>
                                <td><button>=</button></td>
                            </tr>
                        </table>
                    </div> 
                </div>
            
            <div class="col-6 div2">
                <h2 class="text-center">History</h2>
                <ul id="history"></ul>
            </div>
            
        </div>
    </div>

    <footer>
        <?php
        include("foot.php");
        ?>
    </footer>
    <script src="script.js"></script>
   <?php
   include("script.php");
   ?>
</body>
</html>