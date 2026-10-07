<html>

<head>
    <title>Tariff</title>
    <link rel="stylesheet" type="text/css" href="link.php">
</head>

<body bgcolor="#fff2e5">

<?php
    include "index.php";
?>

<br><br>

<center>
    <font color="choco" size="4">
        <b><i><u>TARIFF & POLICIES</u></i></b>
    </font>
</center>

<br><br>

<?php

    include "connection.php";

    $qrysel = "select * from tariff";
    $rs = mysql_query($qrysel);

    if (!$rs)
    {
        echo "<font color='purple' size='4'>Incorrect MySQL select query.</font>";
        die($qrysel);
    }

    echo "<center>";
    echo "<table border='1'>";

    echo "<caption>
            <font color='#7c0000' size='4'>
                <b><i>ROOM TARIFF</i></b>
            </font>
          </caption>";

    echo "<tr>
            <th>ROOM</th>
            <th colspan='2'>INR</th>
            <th colspan='2'>USD</th>
            <th>AVAILABLE</th>
            <th>TOTAL</th>
          </tr>";

    echo "<tr>
            <th>TYPE</th>
            <th>SINGLE</th>
            <th>DOUBLE</th>
            <th>SINGLE</th>
            <th>DOUBLE</th>
            <th>ROOM</th>
            <th>ROOM</th>
          </tr>";

    while ($v = mysql_fetch_array($rs))
    {
        echo "<tr>";

        echo "<td>" . $v['type'] . "</td>";
        echo "<td>" . $v[1] . "</td>";
        echo "<td>" . $v[2] . "</td>";
        echo "<td>" . $v[3] . "</td>";
        echo "<td>" . $v[4] . "</td>";
        echo "<td>" . $v[5] . "</td>";
        echo "<td>" . $v[6] . "</td>";

        echo "</tr>";
    }

    echo "</table>";
?>

<br><br>

<center>

<table>
    <tr>
        <td>

            <ul type="square">

                <font color="#7c0000" size="4">
                    <li>POLICIES:</li>
                </font>

                <ul type="disc">
                    <font color="darkpink">

                        <li>Check in 12 hours.</li>

                        <li>Check out 12 hours.</li>

                        <li>
                            Early arrival is subject to availability. For guaranteed
                            early check<br>
                            in, reservation needs to be made starting from previous night.
                        </li>

                        <li>
                            Government taxes & levies extra as applicable.
                        </li>

                        <li>
                            INR Rs.700 (USD *20) for extra person/bed.
                        </li>

                    </font>
                </ul>

                <br>

                <font color="#7c0000" size="4">
                    <li>RESERVATION GUARANTEE :</li>
                </font>

                <ul type="disc">
                    <font color="darkpink">

                        <li>
                            All bookings must be guaranteed at time of reservation by money<br>
                            order or travel agency.
                        </li>

                    </font>
                </ul>

                <br>

                <font color="#7c0000" size="4">
                    <li>RESERVATION CANCELLATION :</li>
                </font>

                <ul type="disc">
                    <font color="darkpink">

                        <li>
                            Reservation must be cancelled 24 hours prior to the<br>
                            planned arrival time.
                        </li>

                        <li>
                            One night room charge will be levied in case of non-arrival.
                        </li>

                    </font>
                </ul>

            </ul>

        </td>
    </tr>
</table>

</center>

<marquee behavior="alternate" bgcolor="#7e0000">
    <b><i>
        <a href="contectus.php">
            <font color="white">
                Devloped By :- Finava Vipul & Metaliya Nikunj
            </font>
        </a>
    </i></b>
</marquee>

</body>

</html>
