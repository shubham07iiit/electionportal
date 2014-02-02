<?php
include_once "newfrontheader.php";
$sflag=@$_GET['sflag'];
?>
<title>Sign Up Page</title>
<form action="newsignup.php" method="post" enctype="multipart/form-data">
<table border="0" width="100%"">
  <tr>
    <td valign="top" align="center" colspan="4"><span class="style1">Student Basic Information </span></td>
  </tr>
  <tr>
  <td colspan="4">&nbsp;</td>
  </tr>
  <?php
        if($sflag==1)
        {
        ?>
        <tr>
        <td colspan="4" align="center">Invalid Details, Please fill all details carefully... <a href="index.php"> Student Address Book</a></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <?php
        }
        ?>
  <tr>
    <td width="32%">&nbsp;</td>
    <td width="18%">Name </td>
    <td width="32%"><label>
      <input type="text" name="First">
      </label>    </td>
    <td width="18%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Father's Name </td>
    <td><label>
      <input type="text" name="Last">
      </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Date of Birth (DD/MM/YYYY)</td>
    <td><select name="Date" style="width:60px">
        <option>Day</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
&nbsp;
<select name="Month" style="width:70px">
  <option>Month</option>
  <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
</select>
&nbsp;
<select name="Year" style="width:66px">
  <option>Year</option>
  <option>2014</option>
  <option>2013</option>
  <option>2012</option>
  <option>2011</option>
  <option>2010</option>
  <option>2009</option>
  <option>2008</option>
  <option>2007</option>
  <option>2006</option>
  <option>2005</option>
  <option>2004</option>
  <option>2003</option>
  <option>2002</option>
  <option>2001</option>
  <option>2000</option>
  <option>1999</option>
  <option>1998</option>
  <option>1997</option>
  <option>1996</option>
  <option>1997</option>
  <option>1996</option>
  <option>1995</option>
  <option>1994</option>
  <option>1993</option>
  <option>1992</option>
  <option>1991</option>
  <option>1990</option>
  <option>1989</option>
  <option>1988</option>
  <option>1987</option>
  <option>1986</option>
  <option>1985</option>
  <option>1984</option>
  <option>1983</option>
  <option>1982</option>
  <option>1981</option>
  <option>1980</option>
  <option>1979</option>
  <option>1978</option>
  <option>1977</option>
  <option>1976</option>
  <option>1975</option>
  <option>1974</option>
  <option>1973</option>
  <option>1972</option>
</select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Gender</td>
    <td><input type="radio" name="Gender" value="Male"/>
      Male
        <input type="radio" name="Gender" value="female"/>
      Female</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Image</td>
    <td><input type="file" name="Image" size="40" style="width:220px"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Permanent Address </td>
    <td><textarea name="Address" cols="30" rows="4" onClick="this.value=''; ">Must includes :
    Area,Dist or City
    State Name and Pin No.</textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Mobile No</td>
    <td><input type="text" name="Mobile"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>E-mail Address</td>
    <td><input type="text" name="Salary"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><span class="style1">Student Account Information</span></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Roll No</td>
    <td><label>
      <input type="text" name="Mail">
      </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Department Name</td>
    <td><select name="DName">
      <option>Department Name</option>
      <option>Computer_Sciences</option>
      <option>Electonics</option>
      <option>Electicals</option>
      <option>Management</option>
      <option>Bio_Engineering</option>
      <option>Civil</option>
      <option>Mechnical</option>
      <option>Others</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Course Name</td>
    <td><select name="CName">
      <option>Course Name</option>
      <option>B.Tech</option>
      <option>M.Tech</option>
      <option>MBA</option>
      <option>MCA</option>
      <option>BBA</option>
      <option>BCA</option>
      <option>B.A.</option>
      <option>M.A.</option>
      <option>M.Pharm</option>
      <option>B.Pharm</option>
      <option>Integrated_M.Tech</option>
      <option>Integrated_MBA</option>
      <option>Others</option>
      </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Branch</td>
    <td><select name="Branch">
      <option>Branch Name</option>
      <option>CS</option>
      <option>IT</option>
      <option>EC</option>
      <option>EEE</option>
      <option>EI</option>
      <option>BT</option>
      <option>BI</option>
      <option>BM</option>
      <option>MT</option>
      <option>MC</option>
      <option>CI</option>
      <option>Others</option>
      </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Year</td>
    <td><select name="SYear">
      <option>Year</option>
      <option>I</option>
      <option>II</option>
      <option>III</option>
      <option>IV</option>
      <option>V</option>
      </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Choose Password </td>
    <td><input type="password" name="Pass"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Re- Type Password </td>
    <td><input type="password" name="Repass"></td>
    <td>&nbsp;</td>
    <td width="0%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Security Question </td>
    <td><select name="Question">
      <option>Choose your security question</option>
      <option>Your favorite place</option>
      <option>Your favorite food</option>
      <option>Your birth city</option>
      <option>Your favorite city</option>
      <option>Your favorite actor</option>
      <option>Your first mobile no</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Answer</td>
    <td><label>
      <input type="text" name="Answer">
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr><td colspan="4">&nbsp;</td></tr>
  <tr>
    <td align="center"  colspan="4"><label>
      <input type="submit" name="Submit" value="Submit">
    </label></td>
  </tr>
</table>
</form>
</body></html>