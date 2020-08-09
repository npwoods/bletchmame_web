<?php 

$aws_bucket = "http://bletchmame.s3-website-us-east-1.amazonaws.com";
$version_latest = trim(file_get_contents("$aws_bucket/files/version_latest.txt"));

$all_versions = array( 
    "1.9" => array( 
        "date" => "2020-May-20", 
		"msi" => "BletchMAME_1_9.msi",
		"zip" => "BletchMAME_1_9.zip",
		"notes" => "Support for movie recordings"
    ), 
    "1.8" => array( 
        "date" => "2020-Feb-16", 
		"msi" => "BletchMAME_1_8.msi",
		"zip" => "BletchMAME_1_8.zip",
		"notes" => "Debugger support"
    ), 
    "1.7" => array( 
        "date" => "2019-Dec-28", 
		"msi" => "BletchMAME_1_7.msi",
		"zip" => "BletchMAME_1_7.zip",
		"notes" => "Minor usability improvements"
    ), 
    "1.6" => array( 
        "date" => "2019-Nov-24", 
		"msi" => "BletchMAME_1_6.msi",
		"zip" => "BletchMAME_1_6.zip",
		"notes" => "Bug fixes"
    ), 
    "1.5" => array( 
        "date" => "2019-Nov-10", 
		"msi" => "BletchMAME_1_5.msi",
		"zip" => "BletchMAME_1_5.zip",
		"notes" => "Support for MAMEUI-style icon packs"
    ), 
    "1.4" => array( 
        "date" => "2019-Nov-3", 
		"msi" => "BletchMAME_1_4.msi",
		"zip" => "BletchMAME_1_4.zip",
		"notes" => "Full software list support"
    ), 
    "1.3" => array( 
        "date" => "2019-Oct-9", 
		"msi" => "BletchMAME_1_3.msi",
		"zip" => "BletchMAME_1_3.zip",
		"notes" => "Basic software list support"
    ), 
    "1.2" => array( 
        "date" => "2019-Sep-18", 
		"msi" => "BletchMAME_1_2.msi",
		"zip" => "BletchMAME_1_2.zip",
		"notes" => "Bug fixes"
    ), 
    "1.1" => array( 
        "date" => "2019-Sep-8", 
		"msi" => "BletchMAME_1_1.msi",
		"notes" => "Bug fixes"
    ), 
    "1.0" => array( 
        "date" => "2019-Sep-7", 
		"msi" => "BletchMAME_1_0.msi",
		"notes" => "Initial release"
    )
); 

?>
<html>
    <head>
            <title>BletchMAME</title>
            <link rel="stylesheet" href="bletchmame.css" />
    </head>
<body>

    <h1>BletchMAME</h1>
    <p>
        BletchMAME is a new experimental front end for <a href="https://www.mamedev.org/">MAME</a>.  Unlike existing front ends (which function as launchers, keeping
        MAME's internal UI), BletchMAME replaces the internal MAME UI with a more conventional point and click GUI to provide a friendlier experience in a number of
        areas (such as profiles, input configuration and a number of others).  While BletchMAME is intended to support all machines supported by MAME, it should be
        particularly suitable to computer emulation.
    </p>
    <p>
        The current BletchMAME is version <?= array_keys($all_versions)[0] ?>, and requires MAME 0.213 or later.
    </p>

    <h2>Screenshots</h2>
    <table>
        <tr>
            <td><a href="images/screenshot1.png"><img src="images/screenshot1.png" class="mycell" /></a></td>
            <td><a href="images/screenshot2.png"><img src="images/screenshot2.png" class="mycell" /></a></td>
            <td><a href="images/screenshot3.png"><img src="images/screenshot3.png" class="mycell" /></a></td>
            <td><a href="images/screenshot4.png"><img src="images/screenshot4.png" class="mycell" /></a></td>
            <td><a href="images/screenshot5.png"><img src="images/screenshot5.png" class="mycell" /></a></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><a href="images/screenshot6.png"><img src="images/screenshot6.png" class="mycell" /></a></td>
            <td><a href="images/screenshot7.png"><img src="images/screenshot7.png" class="mycell" /></a></td>
            <td><a href="images/screenshot8.png"><img src="images/screenshot8.png" class="mycell" /></a></td>
            <td><a href="images/screenshot9.png"><img src="images/screenshot9.png" class="mycell" /></a></td>
            <td><a href="images/screenshot10.png"><img src="images/screenshot10.png" class="mycell" /></a></td>
        </tr>
        <tr>
            <td><a href="images/screenshot11.png"><img src="images/screenshot11.png" class="mycell" /></a></td>
            <td><a href="images/screenshot12.png"><img src="images/screenshot12.png" class="mycell" /></a></td>
            <td><a href="images/screenshot13.png"><img src="images/screenshot13.png" class="mycell" /></a></td>
            <td><a href="images/screenshot14.png"><img src="images/screenshot14.png" class="mycell" /></a></td>
            <td><a href="images/screenshot15.png"><img src="images/screenshot15.png" class="mycell" /></a></td>
        </tr>
    </table>
    
    <h2>Get BletchMAME</h2>
    <p>
        BletchMAME is distributed as an installer for the BletchMAME executable, along with a MAME LUA plugin that facilitates interactions with the
        front end.  Currently, we only provide BletchMAME releases for 64-bit Windows, even though it should be portable to non-Windows platforms.  (Any takers here?)
    </p>
    <p>
        BletchMAME is licensed under the GNU GPL.
    </p>
    <h3>Releases</h3>
    <table border="1">
        <thead>
            <td>Version</td>
            <td>Date</td>
            <td>MSI</td>
            <td>ZIP</td>
            <td>Summary</td>
        </thead>
        <tbody>
			<?
                $has_version_lastest = false;

				foreach(array_keys($all_versions) as $version)
				{
					echo "<tr>";
					echo "<td>$version</td>";
					echo "<td>" . $all_versions[$version]["date"] . "</td>";
					echo "<td><a href=\"files/" . $all_versions[$version]["msi"] . "\">" . $all_versions[$version]["msi"] . "</a></td>";
					echo "<td><a href=\"files/" . $all_versions[$version]["zip"] . "\">" . $all_versions[$version]["zip"] . "</a></td>";
					echo "<td>" . $all_versions[$version]["notes"] . "</td>";
					echo "</tr>";

                    if (strcmp($version_latest, "$version.0.0") == 0)
                    {
                        $has_version_lastest = true;
					}
				}

                # Show bleeding edge version if its not represented above
                if (!$has_version_lastest)
                {
					echo "<tr>";
					echo "<td>Bleeding edge latest [$version_latest]</td>";
					echo "<td/>";
					echo "<td><a href=\"$aws_bucket/files/BletchMAME_latest.msi\">BletchMAME_latest.msi</a></td>";
					echo "<td><a href=\"$aws_bucket/files/BletchMAME_latest.zip\">BletchMAME_latest.zip</a></td>";
					echo "<td>Might not work!</td>";
					echo "</tr>";                   
				}
			?>
        </tbody>
    </table>

    <h2>Source code</h2>
    <p>
        The BletchMAME sources are hosted on GitHub <a href="https://github.com/npwoods/bletchmame">here</a>.
        <img src="https://github.com/npwoods/bletchmame/workflows/CI/badge.svg" />
    </p>
</body>
</html>