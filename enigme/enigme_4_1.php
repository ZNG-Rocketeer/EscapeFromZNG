<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/master.css">
<script src="../assets/js/chrono.js" charset="utf-8"></script>
<body onload="chronoStart()">

  <?php include '../assets/php/gen_nav.php';
  ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card zng-center" >
        <h2>Enigme 4 <span id="Enisuiv" class="zng-hidden">0</span></h2>
        <form action="#" method="post" id="formeni41">
          <table class="label_tab">
            <tr>
              <td> <label for="i_38">1) 19 + 19 : </label></td>
              <td> <input type="text" maxlength="3" id="i_1" class="label" required="required"/> </td>
              <td> <label for="i_28">16) 30 - 2 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_16" class="label" required="required"/></td>
              <td> <label for="i_13">31) 20 - 7 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_31" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_27">2) 52 - 27 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_2" class="label" required="required"/> </td>
              <td> <label for="i_24">17) 6 x 4 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_17" class="label" required="required"/>    </td>
              <td> <label for="i_39">32) 35 + √16 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_32" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_33">3) (∛125)+(20-22) : </label> </td>
              <td> <input type="text" maxlength="3" id="i_3" class="label" required="required"/> </td>
              <td> <label for="i_11">18) 1 x 11 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_18" class="label" required="required"/> </td>
              <td> <label for="i_5">33) ∛125 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_33" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_25">4) (5 x 10)/(√4) : </label> </td>
              <td> <input type="text" maxlength="3" id="i_4" class="label" required="required"/> </td>
              <td> <label for="i_36">19) 72 / 2 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_19" class="label" required="required"/> </td>
              <td> <label for="i_26">34) 5² + 1 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_34" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_17">5) (28+12)-(30-7) : </label> </td>
              <td> <input type="text" maxlength="3" id="i_5" class="label" required="required"/> </td>
              <td> <label for="i_3">20) √9 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_20" class="label" required="required"/> </td>
              <td> <label for="i_7">35) 4 + 3 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_35" class="label" required="required"/> </td>
            </tr>
            <tr>
            <td> <label for="i_10">6) log(10000000000) : </label> </td>
            <td> <input type="text" maxlength="3" id="i_6" class="label" required="required"/> </td>
            <td> <label for="i_32">21) √1024 : </label> </td>
            <td> <input type="text" maxlength="3" id="i_21" class="label" required="required"/> </td>
            <td> <label for="i_30">36) 5 x 6 : </label> </td>
            <td> <input type="text" maxlength="3" id="i_36" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_34">7) (7x7)-(3x5) : </label> </td>
              <td> <input type="text" maxlength="3" id="i_7" class="label" required="required"/> </td>
              <td> <label for="i_4">22) √4² : </label> </td>
              <td> <input type="text" maxlength="3" id="i_22" class="label" required="required"/> </td>
              <td> <label for="i_16">37) 4² : </label> </td>
              <td> <input type="text" maxlength="3" id="i_37" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_23">8) 60 - 40 + 3 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_8" class="label" required="required"/> </td>
              <td> <label for="i_41">23) 37 + 4 :  </label> </td>
              <td> <input type="text" maxlength="3" id="i_23" class="label" required="required"/> </td>
              <td> <label for="i_12">38) 4 x 3 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_38" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_35">9) 7 x 5  : </label> </td>
              <td> <input type="text" maxlength="3" id="i_9" class="label" required="required"/> </td>
              <td> <label for="i_43">24) 52 - 9 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_24" class="label" required="required"/> </td>
              <td> <label for="i_45">39) 8 x 5 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_39" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_9">10) 27 / 3 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_10" class="label" required="required"/> </td>
              <td> <label for="i_44">25) 34 + 10  : </label> </td>
              <td> <input type="text" maxlength="3" id="i_25" class="label" required="required"/> </td>
              <td> <label for="i_2">40) 1 + 1 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_40" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_14">11) (24+33)-(56-17) : </label> </td>
              <td> <input type="text" maxlength="3" id="i_11" class="label" required="required"/> </td>
              <td> <label for="i_37">26) 20 + 17 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_26" class="label" required="required"/> </td>
              <td> <label for="i_22">41) 2x(10+1) : </label> </td>
              <td> <input type="text" maxlength="3" id="i_41" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_20">12) (√100)+(√100) : </label> </td>
              <td> <input type="text" maxlength="3" id="i_12" class="label" required="required"/> </td>
              <td> <label for="i_40">27) (100/5)x2 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_27" class="label" required="required"/> </td>
              <td> <label for="i_21">42) 40 -19 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_42" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_29">13) ((6x7)-(6x2))-1 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_13" class="label" required="required"/> </td>
              <td> <label for="i_19">28) 28 - 9 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_28" class="label" required="required"/> </td>
              <td> <label for="i_42">43) 21 + 21 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_43" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_18">14) 7 + 7 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_14" class="label" required="required"/> </td>
              <td> <label for="i_8">29) 2² + 2² : </label> </td>
              <td> <input type="text" maxlength="3" id="i_29" class="label" required="required"/> </td>
              <td> <label for="i_6">44) 3 x 2 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_44" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td> <label for="i_15">15) 3 x 5 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_15" class="label" required="required"/> </td>
              <td> <label for="i_1">30) log(10) : </label> </td>
              <td> <input type="text" maxlength="3" id="i_30" class="label" required="required"/> </td>
              <td> <label for="i_31">45) (√25)x6+1 : </label> </td>
              <td> <input type="text" maxlength="3" id="i_45" class="label" required="required"/> </td>
            </tr>
            <tr>
              <td colspan="6"> <button class="zng-btn-form" onclick="verif_label()"> Valider </button> </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
  <script src="../assets/js/enigme.js" charset="utf-8"></script>
</body>
</html>
