
<div id="wrapper" >

    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="?page=home">Home</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav navbar-left">
                    <li {if $currentPage eq "news"}class="active"{/if}><a href="?page=news">News</a></li>
                    <li {if $currentPage eq "reviews"}class="active"{/if}><a href="?page=reviews">E-sports roster</a></li>
                    <li {if $currentPage eq "esports"}class="active"{/if}><a href="?page=esports">Live-E-sports</a></li>
                    <li {if $currentPage eq "about"}class="active"{/if} ><a href="?page=about">About</a></li>
                </ul>
            </div>
        </div>
        </div>
