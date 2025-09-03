<!DOCTYPE html>
<html lang="en">

<?php 
$title = "UFF_Servers";
include '../includes/head.php';
?>

<body>
<div class="container">
    <?php include '../includes/navbar.php'; ?>
  <h2 class="text-center">UFF_Servers</h2>

<!-- first row of columns -->
<div class="row">
    <div class="col-md-6">
    <p>
        The server project grew out of the idea that I am not using all of my computer all of the time - that it is a sharable resource.
<br><br>
Firstly - the main component of the network was a remote desktop server - a server to use basic programs on for example adobe software or 3d scanning programs or blender. Generally these programs require a more powerful GPU, or just windows, or more ram than a random laptop.
<br><br>
Following this we built up a NAS, sitting next to the RDP server - this gave a massive file storage, accessible over LAN for the RDP server and over VPN for remote access.
<br><br>
These two servers working together were a very efficient workaround for two main problems - not having fast internet and having old, unreliable hardware on the users side. By accessing the needed softwares and files over RDP it is not needed for the files and processes to happen on the local device, which saves on network bandwidth and revitalises older hardware.
<br><br>
This project over the two years created a common digital working space, creating opportunity for spontanious collaboration and larger more structured projects. Currently the RDP server needs to be rebuilt and a collective Jellyfin server has been added to the network.
</p>
    </div>
    <div class="col-md-6">
        <a>
            <div>
                <img src="/Images/servers.jpg" class="project-img" style="aspect-ratio: 1 / 1;">
            </div>
        </a>
    </div>
</div>
</div>
</body>
</html>