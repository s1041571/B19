<?php
  session_start();

  if (isset($_SESSION['username'])) {
      session_start();
      session_destroy();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
 
  
    <meta charset="utf-8">
    <title>註冊</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.css" rel="stylesheet" media="screen">

    <link href="css/main.css" rel="stylesheet" media="screen">  -->
    <style>
      ::placeholder {
          color: #39454b;
          opacity: 1; /* Firefox */
      }

      :-ms-input-placeholder { /* Internet Explorer 10-11 */
         color: #39454b;
      }

      ::-ms-input-placeholder { /* Microsoft Edge */
         color: #39454b;
      }
    </style>
  </head>

  <body background="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/intro.JPG">
    <!--TOP-->
        
        <header id="header">    
         
        <div class="topnav" id="myTopnav">
        <nav> 
              <a href="./index/index.php">首頁</a>
            <!--<li><a href="http://120.110.112.177:1660/AnalysisOfPlants/befanaysisOfPlantsore/index.php#contact">Contact</a></li>-->      
            <!--<li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/warn.php">Album</a></li>-->
                    <a href="./logIn.php">登入/註冊</a>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
      </div>
        <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
      <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
      }
      </script>
    </header>

  <!-- Contact -->
  <center>
    <section id="contact" class="main style2">
      <div class="content">

        <header>

          <h2>註冊</h2>
            
        </header>
          
    <div class="me">
        
  <div>
    <form  id="usersignup" name="usersignup" method="post" action="register_fresh.php">
    <div class="form-group">    
    <div class="field">
      <input type="text" id="name" placeholder="請輸入您的姓名" name="name" required>
      </div>
    </div>
  <br><br>  
      <div class="form-group">  
      <div class="field">
      <input name="email" id="email" type="email" class="form-control" placeholder="請輸入您的信箱" name="email" required>
      </div>
    </div>  
  <br><br>  
    <div class="form-group">
      <div class="field">
      <input name="password1" id="password1" type="password" class="form-control" placeholder="請設定密碼" required>
      </div>
    </div>
  <br><br>
    <div class="form-group">
      <div class="field">  
      <input name="password2" id="password2" type="password" class="form-control" placeholder="請再次輸入密碼" required>
      </div>
    </div>
  <br><br>
    <div class="field">
      <select name="career">
        <option value="">請選擇職業</option>
        <option value="student">學生</option>
        <option value="Office worker">上班族</option>
        <option value="worker">工</option>
        <option value="businessman">商</option>
      </select>      
    </div>
  
    <div class="field">
           <select name="year" id="year" form="usersignup" required>&nbsp;&nbsp
                <option value="">出生年</option>
                <option value="2010">2010</option> 
                <option value="2009">2009</option> <option value="2008">2008</option> <option value="2007">2007</option> <option value="2006">2006</option> 
                <option value="2005">2005</option> <option value="2004">2004</option> <option value="2003">2003</option> <option value="2002">2002</option> 
                <option value="2001">2001</option> <option value="2000">2000</option> <option value="1999">1999</option> <option value="1998">1998</option> 
                <option value="1997">1997</option> <option value="1996">1996</option> <option value="1995">1995</option> <option value="1994">1994</option> 
                <option value="1993">1993</option> <option value="1992">1992</option> <option value="1991">1991</option> <option value="1990">1990</option> 
                <option value="1989">1989</option> <option value="1988">1988</option> <option value="1987">1987</option> <option value="1986">1986</option> 
                <option value="1985">1985</option> <option value="1984">1984</option> <option value="1983">1983</option> <option value="1982">1982</option> 
                <option value="1981">1981</option> <option value="1980">1980</option> <option value="1979">1979</option> <option value="1978">1978</option> 
                <option value="1977">1977</option> <option value="1976">1976</option> <option value="1975">1975</option> <option value="1974">1974</option> 
                <option value="1973">1973</option> <option value="1972">1972</option> <option value="1971">1971</option> <option value="1970">1970</option> 
                <option value="1969">1969</option> <option value="1968">1968</option> <option value="1967">1967</option> <option value="1966">1966</option> 
                <option value="1965">1965</option> <option value="1964">1964</option> <option value="1963">1963</option> <option value="1962">1962</option> 
                <option value="1961">1961</option> <option value="1960">1960</option> <option value="1959">1959</option> <option value="1958">1958</option> 
                <option value="1957">1957</option> <option value="1956">1956</option> <option value="1955">1955</option> <option value="1954">1954</option> 
                <option value="1953">1953</option> <option value="1952">1952</option> <option value="1951">1951</option> <option value="1950">1950</option> 
                <option value="1949">1949</option> <option value="1948">1948</option> <option value="1947">1947</option> <option value="1946">1946</option> 
                <option value="1945">1945</option> <option value="1944">1944</option> <option value="1943">1943</option> <option value="1942">1942</option> 
                <option value="1941">1941</option> <option value="1940">1940</option> <option value="1939">1939</option> <option value="1938">1938</option> 
                <option value="1937">1937</option> <option value="1936">1936</option> <option value="1935">1935</option> <option value="1934">1934</option> 
                <option value="1933">1933</option> <option value="1932">1932</option> <option value="1931">1931</option> <option value="1930">1930</option> 
                <option value="1929">1929</option> <option value="1928">1928</option> <option value="1927">1927</option> <option value="1926">1926</option> 
                <option value="1925">1925</option> <option value="1924">1924</option> <option value="1923">1923</option> <option value="1922">1922</option> 
                <option value="1921">1921</option> <option value="1920">1920</option> <option value="1919">1919</option> <option value="1918">1918</option> 
                <option value="1917">1917</option> <option value="1916">1916</option> <option value="1915">1915</option> <option value="1914">1914</option> 
                <option value="1913">1913</option> <option value="1912">1912</option> <option value="1911">1911</option> <option value="1910">1910</option> 
                <option value="1909">1909</option> <option value="1908">1908</option> <option value="1907">1907</option> <option value="1906">1906</option> 
                <option value="1905">1905</option> <option value="1904">1904</option> <option value="1903">1903</option> <option value="1902">1902</option> 
                <option value="1901">1901</option> <option value="1900">1900</option>             
              </select>
          <select name="month" required>&nbsp;&nbsp
                <option value="">出生月</option>                                                                
                <option value="1">1</option>                                                                
                <option value="2">2</option>                                                                
                <option value="3">3</option>                                                                
                <option value="4">4</option>                                                                
                <option value="5">5</option>                                                                
                <option value="6">6</option>                                                                
                <option value="7">7</option>                                                                
                <option value="8">8</option>                                                                
                <option value="9">9</option>                                                                
                <option value="10">10</option>                                                                
                <option value="11">11</option>                                                                
                <option value="12">12</option> 
              </select>
              
            <select name="day" required>&nbsp;&nbsp
                <option value="">出生日</option>                                                                
                <option value="1">1</option>                                                                
                <option value="2">2</option>                                                                
                <option value="3">3</option>                                                                
                <option value="4">4</option>                                                                
                <option value="5">5</option>                                                                
                <option value="6">6</option>                                                                
                <option value="7">7</option>                                                                
                <option value="8">8</option>                                                                
                <option value="9">9</option>                                                                
                <option value="10">10</option>                                                                
                <option value="11">11</option>                                                                
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="30">30</option>
                <option value="31">31</option>

                                
              </select>
        </div>
        <div class="field">已有帳戶了，立即<a href="logIn.php">登入</a></div>
        <ul class="actions">
          <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">註冊</button>
          <button type="reset" >重設</button>
        </ul>

        <div id="message"></div>
      </form>

      </div> 
    </div> 
  </div> 

    </section>
  </center>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="//code.jquery.com/jquery.js"></script> 
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

<script>

$( "#usersignup" ).validate({

  rules: {
    name : {
      required: true,
      minlength: 2
    },
    email: {
      email: true,
      required: true
    },
    password1: {
      required: true,
      minlength: 4,
      pattern: /^[a-zA-Z0-9]+$/
    },
    password2: {
      equalTo: "#password1"
    }
  }

});

</script>

  </body>
</html>