<?php
session_start();
if (!isset($_SESSION["user"]))
{
echo('<form class="form-inline mr-auto ml-auto" action="control/InsertRss.con.php" method="post">
        <input class="form-control mr-1" type="url" name="rss" placeholder="RSS">
        <input class="form-control mr-1" type="email" id="email" name="email" placeholder="E-mail"><br>
        <button class="btn btn-success mr-1" type="submit" >Save</button>
        </form> ');
}
else
{
    
    echo('<form class="form-inline mr-auto ml-auto" action="control/InsertRss.con.php" method="post">
        <input class="form-control mr-1" type="url" name="rss" placeholder="RSS">
        <input class="form-control mr-1" type="email" id="email" name="email" readonly placeholder="E-mail" value = '.$_SESSION["user"].'><br>
        <button class="btn btn-success mr-1" type="submit" >Save</button>
        </form> ');
}?>