<?php
session_start();
include  '../session/sessionadmin.php';

$group  = $_GET["g"];
$name  = $_GET["n"];

?>
<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="' . $name . '.xls"'); #ชื่อไฟล์
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">

<HTML>

<HEAD>

    <meta charset="UTF-8">

</HEAD>

<BODY>

    <TABLE x:str BORDER="1">

        <TR>

            <td>ลำดับที่</td>

            <td>group_name</td>
            <td>group_list</td>

            <td>sex</td>
            <td>age</td>
            <td>qp3</td>
            <td>qp4</td>
            <td>qp5_1</td>
            <td>qp5_2</td>
            <td>qp5_3</td>
            <td>qp5_4</td>
            <td>qp5_5</td>
            <td>qp5_6</td>
            <td>qp5_7</td>
            <td>qp5_8</td>
            <td>qp5_9</td>
            <td>qp5_10</td>
            <td>qp5t</td>
            <td>qp6</td>
            <td>qp6t</td>
            <td>qp7</td>
            <td>qp8</td>
            <td>qp9</td>
            <td>qp10</td>
            <td>qp10t</td>
            <td>qp11</td>
            <td>qp11t</td>
            <td>qp12</td>
            <td>qp12t</td>
            <td>qp13</td>
            <td>qp14</td>
            <td>qp15</td>
            <td>qp16</td>



            <td>weight</td>
            <td>waist</td>
            <td>height</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>cv1</td>

            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>cv2</td>

            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>cv3</td>


            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>cv4</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>cv5</td>



            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <td>cv6</td>


            <td>36</td>
            <td>37</td>
            <td>38</td>
            <td>cv7</td>

            <td>39</td>
            <td>40</td>
            <td>41</td>
            <td>42</td>
            <td>cv8</td>


            <td>43</td>
            <td>44</td>
            <td>45</td>
            <td>46</td>
            <td>47</td>
            <td>48</td>
            <td>49</td>
            <td>50</td>
            <td>51</td>
            <td>52</td>
            <td>53</td>
            <td>54</td>
            <td>55</td>
            <td>56</td>
            <td>57</td>
            <td>58</td>
            <td>59</td>
            <td>cv9</td>

            <td>60</td>
            <td>61</td>
            <td>62</td>
            <td>63</td>
            <td>64</td>
            <td>65</td>
            <td>66</td>
            <td>67</td>
            <td>68</td>
            <td>69</td>
            <td>70</td>
            <td>71</td>
            <td>72</td>
            <td>73</td>
            <td>74</td>
            <td>75</td>


            <td>date</td>
            <td>idcode</td>
            <td>groups</td>

        </TR>

        <?php
        include '../config/connect.php';

        $se = $conStaff->prepare("SELECT* FROM insert_data WHERE groups = ? ");
        $se->execute([$group]);
        $n = 1;

        while ($num = $se->fetch(PDO::FETCH_ASSOC)) {



            echo '
	<TR>

	<td>' . $n . '</td>
	
    <td>' . $num["group_name"] . '</td>
    <td>' . $num["group_list"] . '</td>


	<td>' . $num["sex"] . '</td>
	<td>' . $num["age"] . '</td>
	<td>' . $num["q2_3"] . '</td>
    <td>' . $num["q2_4"] . '</td>
	<td>' . $num["q2_5_1"] . '</td>
	<td>' . $num["q2_5_2"] . '</td>
	<td>' . $num["q2_5_3"] . '</td>
	<td>' . $num["q2_5_4"] . '</td>
	<td>' . $num["q2_5_5"] . '</td>
	<td>' . $num["q2_5_6"] . '</td>
	<td>' . $num["q2_5_7"] . '</td>
	<td>' . $num["q2_5_8"] . '</td>
	<td>' . $num["q2_5_9"] . '</td>
	<td>' . $num["q2_5_10"] . '</td>
	<td>' . $num["q2_5t"] . '</td>
	<td>' . $num["q2_6"] . '</td>
    <td>' . $num["q2_6t"] . '</td>
	<td>' . $num["q2_7"] . '</td>
	<td>' . $num["q2_8"] . '</td>
    <td>' . $num["q2_9"] . '</td>
    <td>' . $num["q2_10"] . '</td>
    <td>' . $num["q2_10t"] . '</td>
    <td>' . $num["q2_11"] . '</td>
    <td>' . $num["q2_11t"] . '</td>
	<td>' . $num["q2_12"] . '</td>
    <td>' . $num["q2_12t"] . '</td>
    <td>' . $num["q2_13"] . '</td>
    <td>' . $num["q2_14"] . '</td>
	<td>' . $num["q2_15"] . '</td>
    <td>' . $num["q2_16"] . '</td>


	<td>' . $num["weight"] . '</td>
	<td>' . $num["waist"] . '</td>
	<td>' . $num["height"] . '</td>
	<td>' . $num["q2"] . '</td>
	<td>' . $num["q3"] . '</td>
	<td>' . $num["q4"] . '</td>
	<td>' . $num["q5"] . '</td>
	<td>' . $num["q6"] . '</td>
	<td>' . $num["q7"] . '</td>
	<td>' . $num["q8"] . '</td>
	<td>' . $num["q9"] . '</td>
	<td>' . $num["q10"] . '</td>
	<td>' . $num["q11"] . '</td>
    <td>' . $num["cv1"] . '</td>
	

	
	<td>' . $num["q12"] . '</td>
	<td>' . $num["q13"] . '</td>
	<td>' . $num["q14"] . '</td>
    <td>' . $num["q15"] . '</td>
	<td>' . $num["q16"] . '</td>
    <td>' . $num["cv2"] . '</td>

	<td>' . $num["q17"] . '</td>
	<td>' . $num["q18"] . '</td>
	<td>' . $num["q19"] . '</td>
	<td>' . $num["q20"] . '</td>
	<td>' . $num["q21"] . '</td>
    <td>' . $num["cv3"] . '</td>
    
	<td>' . $num["q22"] . '</td>
	<td>' . $num["q23"] . '</td>
	<td>' . $num["q24"] . '</td>
    <td>' . $num["q25"] . '</td>
	<td>' . $num["q26"] . '</td>
    <td>' . $num["cv4"] . '</td>
	
	<td>' . $num["q27"] . '</td>
    <td>' . $num["q28"] . '</td>
	<td>' . $num["q29"] . '</td>
    <td>' . $num["cv5"] . '</td>
	
	<td>' . $num["q30"] . '</td>
	<td>' . $num["q31"] . '</td>
	<td>' . $num["q32"] . '</td>
	<td>' . $num["q33"] . '</td>
	<td>' . $num["q34"] . '</td>
	<td>' . $num["q35"] . '</td>
	<td>' . $num["cv6"] . '</td>
	
	<td>' . $num["q36"] . '</td>
    <td>' . $num["q37"] . '</td>
	<td>' . $num["q38"] . '</td>
	<td>' . $num["cv7"] . '</td>
	
	<td>' . $num["q39"] . '</td>
	<td>' . $num["q40"] . '</td>
    <td>' . $num["q41"] . '</td>
	<td>' . $num["q42"] . '</td>
    <td>' . $num["cv8"] . '</td>

	<td>' . $num["q43"] . '</td>
	<td>' . $num["q44"] . '</td>
	<td>' . $num["q45"] . '</td>
	<td>' . $num["q46"] . '</td>
	<td>' . $num["q47"] . '</td>
    <td>' . $num["q48"] . '</td>
	<td>' . $num["q49"] . '</td>
	<td>' . $num["q50"] . '</td>
	<td>' . $num["q51"] . '</td>
	<td>' . $num["q52"] . '</td>
	<td>' . $num["q53"] . '</td>
	<td>' . $num["q54"] . '</td>
	<td>' . $num["q55"] . '</td>
	<td>' . $num["q56"] . '</td>
	<td>' . $num["q57"] . '</td>
	<td>' . $num["q58"] . '</td>
	<td>' . $num["q59"] . '</td>
    <td>' . $num["cv9"] . '</td>


	
	<td>' . $num["q60"] . '</td>
	<td>' . $num["q61"] . '</td>
	<td>' . $num["q62"] . '</td>
	<td>' . $num["q63"] . '</td>
	<td>' . $num["q64"] . '</td>
	<td>' . $num["q65"] . '</td>
	<td>' . $num["q66"] . '</td>
	<td>' . $num["q67"] . '</td>
	<td>' . $num["q68"] . '</td>
	<td>' . $num["q69"] . '</td>
	<td>' . $num["q70"] . '</td>
	<td>' . $num["q71"] . '</td>
	<td>' . $num["q72"] . '</td>
	<td>' . $num["q73"] . '</td>
    <td>' . $num["q74"] . '</td>
	<td>' . $num["q75"] . '</td>

	


	<td>' . $num["date"] . '</td>
	<td>' . $num["idcode"] . '</td>
    <td>' . $num["groups"] . '</td>
	</TR>

	';
            $n++;
        }

        ?>

    </TABLE>
</BODY>

</HTML>