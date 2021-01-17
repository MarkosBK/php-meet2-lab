<?
function NavMenu(){
    $navItems["home"]="home.php";
    $navItems["contacts"]="contacts.php";
    $navItems["about"]="about.php";
    $navItems["project"]="project.php";
    $navItems["map"]="map.php";
    echo "<nav style='width: 60%;  margin: 0 auto;'>";
    echo "<ul style='display: flex; justify-content:center; list-style:none;'>";
    foreach ($navItems as $key => $value) {
        echo "<li><a style='font-size:24px; margin: 0 15px; text-decoration: none; color: #909090' href='$value'>$key</li></a>";
    }
    echo "</ul>";
    echo "</nav>";
    echo "<hr>";
}
?>