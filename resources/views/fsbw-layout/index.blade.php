@include('fsbw-layout.common.header')

<style>
    .select2-selection__rendered {
        line-height: 35px !important;
    }
    .select2-container .select2-selection--single {
        height: 44px !important;
        border: 1px solid #d5dadf;
        border-radius: 4px;
        background: #fff;
        padding: 6px 12px;
        font-size: 14px;
        color: #999999;
    }
    .select2-selection__arrow {
        height: 40px !important;
    }
</style>

<!---this is banner section--->
<div class="banner1">
    <div class="banerblk">

        <br>

        <!-- Large modal -->
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h1 id="freelancer_mafus" data-aos="zoom-in" class="text-left">Turn Your Smartphone into a Real Estate Agent!™
                    </h1>
                    <p style="color: #ffffffe8;font-size: 19px;font-family:Nunito;">We Deal with Different kinds of Properties with virtual No matter you need a House,
                        an Apartment or garage.
                    </p>

                </div>
                <div id="nontho" class="col-md">

                    <br>
                    <h4 class="text-center text-uppercase">Find Your Property With Virtual</h4>
                    <br>


                    <form method="POST" action="{{ URL::to('/listing/search/1') }}">
                        {{ csrf_field() }}
                        <div class="container">
                            <div class="row">
                                <div class="col-md">
{{--                                    <input id="freelancer_mamun" type="text" placeholder="Enter City/Town" required>--}}
                                    <select id='freelancer_mamun' name="city_select">
                                        <option value=''>Select City</option>
                                        <option value="Any">Any</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Adams">Adams</option>
                                        <option value="Adrian">Adrian</option>
                                        <option value="Afton">Afton</option>
                                        <option value="Aitkin">Aitkin</option>
                                        <option value="Akeley">Akeley</option>
                                        <option value="Alango">Alango</option>
                                        <option value="Albany">Albany</option>
                                        <option value="Albert+Lea">Albert Lea</option>
                                        <option value="Alberta">Alberta</option>
                                        <option value="Albertville">Albertville</option>
                                        <option value="Alden">Alden</option>
                                        <option value="Aldrich">Aldrich</option>
                                        <option value="Alexandria">Alexandria</option>
                                        <option value="Alma">Alma</option>
                                        <option value="Almena">Almena</option>
                                        <option value="Altamont">Altamont</option>
                                        <option value="Altoona">Altoona</option>
                                        <option value="Altura">Altura</option>
                                        <option value="Amery">Amery</option>
                                        <option value="Amiret">Amiret</option>
                                        <option value="Andover">Andover</option>
                                        <option value="Angle+Inlet">Angle Inlet</option>
                                        <option value="Angora">Angora</option>
                                        <option value="Annandale">Annandale</option>
                                        <option value="Anoka">Anoka</option>
                                        <option value="Apple+Valley">Apple Valley</option>
                                        <option value="Appleton">Appleton</option>
                                        <option value="Arago">Arago</option>
                                        <option value="Arcadia">Arcadia</option>
                                        <option value="Arco">Arco</option>
                                        <option value="Arden+Hills">Arden Hills</option>
                                        <option value="Arkansaw">Arkansaw</option>
                                        <option value="Arlington">Arlington</option>
                                        <option value="Ashby">Ashby</option>
                                        <option value="Ashland">Ashland</option>
                                        <option value="Askov">Askov</option>
                                        <option value="Atwater">Atwater</option>
                                        <option value="Audubon">Audubon</option>
                                        <option value="Augusta">Augusta</option>
                                        <option value="Aurora">Aurora</option>
                                        <option value="Austin">Austin</option>
                                        <option value="Avoca">Avoca</option>
                                        <option value="Avon">Avon</option>
                                        <option value="Babbitt">Babbitt</option>
                                        <option value="Backus">Backus</option>
                                        <option value="Bagley">Bagley</option>
                                        <option value="Balaton">Balaton</option>
                                        <option value="Baldwin">Baldwin</option>
                                        <option value="Balsam+Lake">Balsam Lake</option>
                                        <option value="Barnes">Barnes</option>
                                        <option value="Barnesville">Barnesville</option>
                                        <option value="Barnum">Barnum</option>
                                        <option value="Barrett">Barrett</option>
                                        <option value="Barron">Barron</option>
                                        <option value="Barronett">Barronett</option>
                                        <option value="Battle+Lake">Battle Lake</option>
                                        <option value="Baudette">Baudette</option>
                                        <option value="Baxter">Baxter</option>
                                        <option value="Bay+City">Bay City</option>
                                        <option value="Bayfield">Bayfield</option>
                                        <option value="Bayport">Bayport</option>
                                        <option value="Beach">Beach</option>
                                        <option value="Beaver+Bay">Beaver Bay</option>
                                        <option value="Becida">Becida</option>
                                        <option value="Becker">Becker</option>
                                        <option value="Beldenville">Beldenville</option>
                                        <option value="Belgrade">Belgrade</option>
                                        <option value="Belle+Plaine">Belle Plaine</option>
                                        <option value="Bellechester">Bellechester</option>
                                        <option value="Bellingham">Bellingham</option>
                                        <option value="Belview">Belview</option>
                                        <option value="Bemidji">Bemidji</option>
                                        <option value="Bena">Bena</option>
                                        <option value="Bennett">Bennett</option>
                                        <option value="Benson">Benson</option>
                                        <option value="Bertha">Bertha</option>
                                        <option value="Bethel">Bethel</option>
                                        <option value="Big+Falls">Big Falls</option>
                                        <option value="Big+Lake">Big Lake</option>
                                        <option value="Big+Stone+City">Big Stone City</option>
                                        <option value="Bigfork">Bigfork</option>
                                        <option value="Bingham+Lake">Bingham Lake</option>
                                        <option value="Birchdale">Birchdale</option>
                                        <option value="Birchwood">Birchwood</option>
                                        <option value="Bird+Island">Bird Island</option>
                                        <option value="Biwabik">Biwabik</option>
                                        <option value="Black+Brook">Black Brook</option>
                                        <option value="Black+River+Falls">Black River Falls</option>
                                        <option value="Blackduck">Blackduck</option>
                                        <option value="Blaine">Blaine</option>
                                        <option value="Blair">Blair</option>
                                        <option value="Blomkest">Blomkest</option>
                                        <option value="Bloomer">Bloomer</option>
                                        <option value="Blooming+Prairie">Blooming Prairie</option>
                                        <option value="Bloomington">Bloomington</option>
                                        <option value="Blue+Earth">Blue Earth</option>
                                        <option value="Blueberry">Blueberry</option>
                                        <option value="Bluffton">Bluffton</option>
                                        <option value="Bock">Bock</option>
                                        <option value="Bovey">Bovey</option>
                                        <option value="Bowlus">Bowlus</option>
                                        <option value="Boy+River">Boy River</option>
                                        <option value="Boyceville">Boyceville</option>
                                        <option value="Braham">Braham</option>
                                        <option value="Brainerd">Brainerd</option>
                                        <option value="Brandon">Brandon</option>
                                        <option value="Breckenridge">Breckenridge</option>
                                        <option value="Breezy+Point">Breezy Point</option>
                                        <option value="Breitung">Breitung</option>
                                        <option value="Brewster">Brewster</option>
                                        <option value="Bricelyn">Bricelyn</option>
                                        <option value="Brimson">Brimson</option>
                                        <option value="Britt">Britt</option>
                                        <option value="Brook+Park">Brook Park</option>
                                        <option value="Brooklyn">Brooklyn</option>
                                        <option value="Brooklyn+Center">Brooklyn Center</option>
                                        <option value="Brooklyn+Park">Brooklyn Park</option>
                                        <option value="Brookston">Brookston</option>
                                        <option value="Brooten">Brooten</option>
                                        <option value="Browerville">Browerville</option>
                                        <option value="Browns+Valley">Browns Valley</option>
                                        <option value="Brownsdale">Brownsdale</option>
                                        <option value="Brownsville">Brownsville</option>
                                        <option value="Brownton">Brownton</option>
                                        <option value="Bruce">Bruce</option>
                                        <option value="Brule">Brule</option>
                                        <option value="Bruno">Bruno</option>
                                        <option value="Brunswick">Brunswick</option>
                                        <option value="Buffalo">Buffalo</option>
                                        <option value="Buffalo+Lake">Buffalo Lake</option>
                                        <option value="Buhl">Buhl</option>
                                        <option value="Burnsville">Burnsville</option>
                                        <option value="Burtrum">Burtrum</option>
                                        <option value="Butterfield">Butterfield</option>
                                        <option value="Butternut">Butternut</option>
                                        <option value="Buyck">Buyck</option>
                                        <option value="Byron">Byron</option>
                                        <option value="Cable">Cable</option>
                                        <option value="Cadott">Cadott</option>
                                        <option value="Cady">Cady</option>
                                        <option value="Caledonia">Caledonia</option>
                                        <option value="Calumet">Calumet</option>
                                        <option value="Cambridge">Cambridge</option>
                                        <option value="Cameron">Cameron</option>
                                        <option value="Canby">Canby</option>
                                        <option value="Canisteo">Canisteo</option>
                                        <option value="Cannon+Falls">Cannon Falls</option>
                                        <option value="Canton">Canton</option>
                                        <option value="Canyon">Canyon</option>
                                        <option value="Carimona">Carimona</option>
                                        <option value="Carlos">Carlos</option>
                                        <option value="Carlton">Carlton</option>
                                        <option value="Carver">Carver</option>
                                        <option value="Cass+Lake">Cass Lake</option>
                                        <option value="Center+City">Center City</option>
                                        <option value="Centerville">Centerville</option>
                                        <option value="Centuria">Centuria</option>
                                        <option value="Ceylon">Ceylon</option>
                                        <option value="Champlin">Champlin</option>
                                        <option value="Chanhassen">Chanhassen</option>
                                        <option value="Chaska">Chaska</option>
                                        <option value="Chatfield">Chatfield</option>
                                        <option value="Chetek">Chetek</option>
                                        <option value="Chickamaw+Beach">Chickamaw Beach</option>
                                        <option value="Chippewa+Falls">Chippewa Falls</option>
                                        <option value="Chisago+City">Chisago City</option>
                                        <option value="Chisholm">Chisholm</option>
                                        <option value="Chokio">Chokio</option>
                                        <option value="Circle+Pines">Circle Pines</option>
                                        <option value="Clam+Falls">Clam Falls</option>
                                        <option value="Clam+Lake">Clam Lake</option>
                                        <option value="Clara+City">Clara City</option>
                                        <option value="Claremont">Claremont</option>
                                        <option value="Clarissa">Clarissa</option>
                                        <option value="Clark">Clark</option>
                                        <option value="Clarkfield">Clarkfield</option>
                                        <option value="Clarks+Grove">Clarks Grove</option>
                                        <option value="Clayton">Clayton</option>
                                        <option value="Clear+Lake">Clear Lake</option>
                                        <option value="Clearwater">Clearwater</option>
                                        <option value="Clements">Clements</option>
                                        <option value="Cleveland">Cleveland</option>
                                        <option value="Clifton">Clifton</option>
                                        <option value="Clinton">Clinton</option>
                                        <option value="Clitherall">Clitherall</option>
                                        <option value="Clontarf">Clontarf</option>
                                        <option value="Cloquet">Cloquet</option>
                                        <option value="Cobden">Cobden</option>
                                        <option value="Cochrane">Cochrane</option>
                                        <option value="Cohasset">Cohasset</option>
                                        <option value="Cokato">Cokato</option>
                                        <option value="Cold+Spring">Cold Spring</option>
                                        <option value="Coleraine">Coleraine</option>
                                        <option value="Colfax">Colfax</option>
                                        <option value="Cologne">Cologne</option>
                                        <option value="Columbia+Heights">Columbia Heights</option>
                                        <option value="Columbus">Columbus</option>
                                        <option value="Comfrey">Comfrey</option>
                                        <option value="Comstock">Comstock</option>
                                        <option value="Conger">Conger</option>
                                        <option value="Conover">Conover</option>
                                        <option value="Conrath">Conrath</option>
                                        <option value="Cook">Cook</option>
                                        <option value="Coon+Rapids">Coon Rapids</option>
                                        <option value="Corcoran">Corcoran</option>
                                        <option value="Cornucopia">Cornucopia</option>
                                        <option value="Cosmos">Cosmos</option>
                                        <option value="Cottage+Grove">Cottage Grove</option>
                                        <option value="Cotton">Cotton</option>
                                        <option value="Cottonwood">Cottonwood</option>
                                        <option value="Couderay">Couderay</option>
                                        <option value="Courtland">Courtland</option>
                                        <option value="Crane+Lake">Crane Lake</option>
                                        <option value="Credit+River+Township">Credit River Township</option>
                                        <option value="Cromwell">Cromwell</option>
                                        <option value="Crooked+Lake">Crooked Lake</option>
                                        <option value="Crosby">Crosby</option>
                                        <option value="Crosslake">Crosslake</option>
                                        <option value="Crystal">Crystal</option>
                                        <option value="Culver">Culver</option>
                                        <option value="Cumberland">Cumberland</option>
                                        <option value="Currie">Currie</option>
                                        <option value="Cushing">Cushing</option>
                                        <option value="Cuyuna">Cuyuna</option>
                                        <option value="Cyrus">Cyrus</option>
                                        <option value="Dairyland">Dairyland</option>
                                        <option value="Dakota">Dakota</option>
                                        <option value="Dalbo">Dalbo</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Dalton">Dalton</option>
                                        <option value="Danbury">Danbury</option>
                                        <option value="Danforth">Danforth</option>
                                        <option value="Danube">Danube</option>
                                        <option value="Darwin">Darwin</option>
                                        <option value="Dassel">Dassel</option>
                                        <option value="Dawson">Dawson</option>
                                        <option value="Dayton">Dayton</option>
                                        <option value="De+Graff">De Graff</option>
                                        <option value="Deephaven">Deephaven</option>
                                        <option value="Deer+Creek">Deer Creek</option>
                                        <option value="Deer+Park">Deer Park</option>
                                        <option value="Deer+River">Deer River</option>
                                        <option value="Deerwood">Deerwood</option>
                                        <option value="Delano">Delano</option>
                                        <option value="Delavan">Delavan</option>
                                        <option value="Dell+Grove">Dell Grove</option>
                                        <option value="Dellwood">Dellwood</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Dennison">Dennison</option>
                                        <option value="Dent">Dent</option>
                                        <option value="Detroit+Lakes">Detroit Lakes</option>
                                        <option value="Dexter">Dexter</option>
                                        <option value="Diamond+Bluff">Diamond Bluff</option>
                                        <option value="Dodge">Dodge</option>
                                        <option value="Dodge+Center">Dodge Center</option>
                                        <option value="Dolliver">Dolliver</option>
                                        <option value="Donnelly">Donnelly</option>
                                        <option value="Dover">Dover</option>
                                        <option value="Dovray">Dovray</option>
                                        <option value="Downing">Downing</option>
                                        <option value="Dresbach">Dresbach</option>
                                        <option value="Dresser">Dresser</option>
                                        <option value="Drummond">Drummond</option>
                                        <option value="Duluth">Duluth</option>
                                        <option value="Dumont">Dumont</option>
                                        <option value="Dundas">Dundas</option>
                                        <option value="Dunnell">Dunnell</option>
                                        <option value="Durand">Durand</option>
                                        <option value="Eagan">Eagan</option>
                                        <option value="Eagle+Bend">Eagle Bend</option>
                                        <option value="Eagle+Lake">Eagle Lake</option>
                                        <option value="Eagle+Point">Eagle Point</option>
                                        <option value="East+Bethel">East Bethel</option>
                                        <option value="East+Farmington">East Farmington</option>
                                        <option value="East+Gull+Lake">East Gull Lake</option>
                                        <option value="Easton">Easton</option>
                                        <option value="Eau+Claire">Eau Claire</option>
                                        <option value="Eau+Galle">Eau Galle</option>
                                        <option value="Echo">Echo</option>
                                        <option value="Eden+Prairie">Eden Prairie</option>
                                        <option value="Eden+Valley">Eden Valley</option>
                                        <option value="Edgerton">Edgerton</option>
                                        <option value="Edgewater">Edgewater</option>
                                        <option value="Edina">Edina</option>
                                        <option value="Effie">Effie</option>
                                        <option value="Eitzen">Eitzen</option>
                                        <option value="Elba">Elba</option>
                                        <option value="Elbow+Lake">Elbow Lake</option>
                                        <option value="Eleva">Eleva</option>
                                        <option value="Elgin">Elgin</option>
                                        <option value="Elizabeth">Elizabeth</option>
                                        <option value="Elk+Mound">Elk Mound</option>
                                        <option value="Elk+River">Elk River</option>
                                        <option value="Elko+New+Market">Elko New Market</option>
                                        <option value="Elkton">Elkton</option>
                                        <option value="Ellendale">Ellendale</option>
                                        <option value="Ellsworth">Ellsworth</option>
                                        <option value="Elmore">Elmore</option>
                                        <option value="Elmwood">Elmwood</option>
                                        <option value="Elrosa">Elrosa</option>
                                        <option value="Ely">Ely</option>
                                        <option value="Elysian">Elysian</option>
                                        <option value="Embarrass">Embarrass</option>
                                        <option value="Emerald">Emerald</option>
                                        <option value="Emily">Emily</option>
                                        <option value="Emmons">Emmons</option>
                                        <option value="Erhard">Erhard</option>
                                        <option value="Esko">Esko</option>
                                        <option value="Ettrick">Ettrick</option>
                                        <option value="Eureka">Eureka</option>
                                        <option value="Eureka+Center">Eureka Center</option>
                                        <option value="Evan">Evan</option>
                                        <option value="Evansville">Evansville</option>
                                        <option value="Eveleth">Eveleth</option>
                                        <option value="Excelsior">Excelsior</option>
                                        <option value="Exeland">Exeland</option>
                                        <option value="Eyota">Eyota</option>
                                        <option value="Fairchild">Fairchild</option>
                                        <option value="Fairfax">Fairfax</option>
                                        <option value="Fairmont">Fairmont</option>
                                        <option value="Falcon+Heights">Falcon Heights</option>
                                        <option value="Fall+Creek">Fall Creek</option>
                                        <option value="Faribault">Faribault</option>
                                        <option value="Farmington">Farmington</option>
                                        <option value="Farwell">Farwell</option>
                                        <option value="Fayal">Fayal</option>
                                        <option value="Federal+Dam">Federal Dam</option>
                                        <option value="Fergus+Falls">Fergus Falls</option>
                                        <option value="Fifty+Lakes">Fifty Lakes</option>
                                        <option value="Finland">Finland</option>
                                        <option value="Finlayson">Finlayson</option>
                                        <option value="Flensburg">Flensburg</option>
                                        <option value="Floodwood">Floodwood</option>
                                        <option value="Florence">Florence</option>
                                        <option value="Foley">Foley</option>
                                        <option value="Forada">Forada</option>
                                        <option value="Forbes">Forbes</option>
                                        <option value="Forest+Lake">Forest Lake</option>
                                        <option value="Foreston">Foreston</option>
                                        <option value="Fort+Ripley">Fort Ripley</option>
                                        <option value="Fosston">Fosston</option>
                                        <option value="Fountain">Fountain</option>
                                        <option value="Fountain+City">Fountain City</option>
                                        <option value="Foxboro">Foxboro</option>
                                        <option value="Franconia">Franconia</option>
                                        <option value="Franklin">Franklin</option>
                                        <option value="Frazee">Frazee</option>
                                        <option value="Frederic">Frederic</option>
                                        <option value="Freeborn">Freeborn</option>
                                        <option value="Freeport">Freeport</option>
                                        <option value="Fridley">Fridley</option>
                                        <option value="Frontenac">Frontenac</option>
                                        <option value="Fulda">Fulda</option>
                                        <option value="Galesville">Galesville</option>
                                        <option value="Garfield">Garfield</option>
                                        <option value="Garrison">Garrison</option>
                                        <option value="Garvin">Garvin</option>
                                        <option value="Gary">Gary</option>
                                        <option value="Gaylord">Gaylord</option>
                                        <option value="Gem+Lake">Gem Lake</option>
                                        <option value="Geneva">Geneva</option>
                                        <option value="Genola">Genola</option>
                                        <option value="Gheen">Gheen</option>
                                        <option value="Ghent">Ghent</option>
                                        <option value="Gibbon">Gibbon</option>
                                        <option value="Gilbert">Gilbert</option>
                                        <option value="Gilman">Gilman</option>
                                        <option value="Glen+Flora">Glen Flora</option>
                                        <option value="Glencoe">Glencoe</option>
                                        <option value="Glenville">Glenville</option>
                                        <option value="Glenwood">Glenwood</option>
                                        <option value="Glenwood+City">Glenwood City</option>
                                        <option value="Golden+Valley">Golden Valley</option>
                                        <option value="Good+Thunder">Good Thunder</option>
                                        <option value="Goodhue">Goodhue</option>
                                        <option value="Goodland">Goodland</option>
                                        <option value="Goodview">Goodview</option>
                                        <option value="Gordon">Gordon</option>
                                        <option value="Graceville">Graceville</option>
                                        <option value="Granada">Granada</option>
                                        <option value="Grand+Marais">Grand Marais</option>
                                        <option value="Grand+Meadow">Grand Meadow</option>
                                        <option value="Grand+Rapids">Grand Rapids</option>
                                        <option value="Grand+View">Grand View</option>
                                        <option value="Grandy">Grandy</option>
                                        <option value="Granite+Falls">Granite Falls</option>
                                        <option value="Grant">Grant</option>
                                        <option value="Granton">Granton</option>
                                        <option value="Grantsburg">Grantsburg</option>
                                        <option value="Grasston">Grasston</option>
                                        <option value="Green+Isle">Green Isle</option>
                                        <option value="Greenfield">Greenfield</option>
                                        <option value="Greenwald">Greenwald</option>
                                        <option value="Greenwood">Greenwood</option>
                                        <option value="Grey+Eagle">Grey Eagle</option>
                                        <option value="Grove+City">Grove City</option>
                                        <option value="Grygla">Grygla</option>
                                        <option value="Hackensack">Hackensack</option>
                                        <option value="Hadley">Hadley</option>
                                        <option value="Hager+City">Hager City</option>
                                        <option value="Hallie">Hallie</option>
                                        <option value="Ham+Lake">Ham Lake</option>
                                        <option value="Hamburg">Hamburg</option>
                                        <option value="Hammond">Hammond</option>
                                        <option value="Hampton">Hampton</option>
                                        <option value="Hancock">Hancock</option>
                                        <option value="Hanover">Hanover</option>
                                        <option value="Hanska">Hanska</option>
                                        <option value="Harding">Harding</option>
                                        <option value="Harmony">Harmony</option>
                                        <option value="Harris">Harris</option>
                                        <option value="Hart">Hart</option>
                                        <option value="Hartland">Hartland</option>
                                        <option value="Hastings">Hastings</option>
                                        <option value="Hawick">Hawick</option>
                                        <option value="Hawkins">Hawkins</option>
                                        <option value="Hawthorne">Hawthorne</option>
                                        <option value="Hayfield">Hayfield</option>
                                        <option value="Hayward">Hayward</option>
                                        <option value="Hazel+Run">Hazel Run</option>
                                        <option value="Hector">Hector</option>
                                        <option value="Henderson">Henderson</option>
                                        <option value="Hendricks">Hendricks</option>
                                        <option value="Henning">Henning</option>
                                        <option value="Herman">Herman</option>
                                        <option value="Hermantown">Hermantown</option>
                                        <option value="Heron+Lake">Heron Lake</option>
                                        <option value="Hertel">Hertel</option>
                                        <option value="Hewitt">Hewitt</option>
                                        <option value="Hibbing">Hibbing</option>
                                        <option value="High+Forest">High Forest</option>
                                        <option value="Hill+City">Hill City</option>
                                        <option value="Hillman">Hillman</option>
                                        <option value="Hillsdale">Hillsdale</option>
                                        <option value="Hinckley">Hinckley</option>
                                        <option value="Hoffman">Hoffman</option>
                                        <option value="Hokah">Hokah</option>
                                        <option value="Holcombe">Holcombe</option>
                                        <option value="Holdingford">Holdingford</option>
                                        <option value="Hollandale">Hollandale</option>
                                        <option value="Holloway">Holloway</option>
                                        <option value="Holmen">Holmen</option>
                                        <option value="Holyoke">Holyoke</option>
                                        <option value="Hopkins">Hopkins</option>
                                        <option value="Houlton">Houlton</option>
                                        <option value="Houston">Houston</option>
                                        <option value="Hovland">Hovland</option>
                                        <option value="Howard+Lake">Howard Lake</option>
                                        <option value="Hoyt+Lakes">Hoyt Lakes</option>
                                        <option value="Hudson">Hudson</option>
                                        <option value="Hugo">Hugo</option>
                                        <option value="Humbird">Humbird</option>
                                        <option value="Huntley">Huntley</option>
                                        <option value="Hutchinson">Hutchinson</option>
                                        <option value="Independence">Independence</option>
                                        <option value="International+Falls">International Falls</option>
                                        <option value="Inver+Grove+Heights">Inver Grove Heights</option>
                                        <option value="Iron">Iron</option>
                                        <option value="Iron+River">Iron River</option>
                                        <option value="Ironton">Ironton</option>
                                        <option value="Isabella">Isabella</option>
                                        <option value="Isanti">Isanti</option>
                                        <option value="Isle">Isle</option>
                                        <option value="Ivanhoe">Ivanhoe</option>
                                        <option value="Jackson">Jackson</option>
                                        <option value="Jacobson">Jacobson</option>
                                        <option value="Janesville">Janesville</option>
                                        <option value="Jasper">Jasper</option>
                                        <option value="Jeffers">Jeffers</option>
                                        <option value="Jenkins">Jenkins</option>
                                        <option value="Jim+Falls">Jim Falls</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kabetogama">Kabetogama</option>
                                        <option value="Kanaranzi">Kanaranzi</option>
                                        <option value="Kandiyohi">Kandiyohi</option>
                                        <option value="Kasota">Kasota</option>
                                        <option value="Kasson">Kasson</option>
                                        <option value="Kelliher">Kelliher</option>
                                        <option value="Kellogg">Kellogg</option>
                                        <option value="Kelsey">Kelsey</option>
                                        <option value="Kenneth">Kenneth</option>
                                        <option value="Kensington">Kensington</option>
                                        <option value="Kenyon">Kenyon</option>
                                        <option value="Kerkhoven">Kerkhoven</option>
                                        <option value="Kerrick">Kerrick</option>
                                        <option value="Kettle+River">Kettle River</option>
                                        <option value="Kiester">Kiester</option>
                                        <option value="Kilkenny">Kilkenny</option>
                                        <option value="Kimball">Kimball</option>
                                        <option value="Kingston">Kingston</option>
                                        <option value="Knapp">Knapp</option>
                                        <option value="Knife+River">Knife River</option>
                                        <option value="La+Crescent">La Crescent</option>
                                        <option value="La+Crosse">La Crosse</option>
                                        <option value="La+Pointe">La Pointe</option>
                                        <option value="La+Salle">La Salle</option>
                                        <option value="Ladysmith">Ladysmith</option>
                                        <option value="Lafayette">Lafayette</option>
                                        <option value="Lake+Benton">Lake Benton</option>
                                        <option value="Lake+City">Lake City</option>
                                        <option value="Lake+Crystal">Lake Crystal</option>
                                        <option value="Lake+Elmo">Lake Elmo</option>
                                        <option value="Lake+Emma">Lake Emma</option>
                                        <option value="Lake+George">Lake George</option>
                                        <option value="Lake+Hallie">Lake Hallie</option>
                                        <option value="Lake+Holcombe">Lake Holcombe</option>
                                        <option value="Lake+Lillian">Lake Lillian</option>
                                        <option value="Lake+Nebagamon">Lake Nebagamon</option>
                                        <option value="Lake+Park">Lake Park</option>
                                        <option value="Lake+Saint+Croix+Beach">Lake Saint Croix Beach</option>
                                        <option value="Lake+Shore">Lake Shore</option>
                                        <option value="Lakefield">Lakefield</option>
                                        <option value="Lakeland">Lakeland</option>
                                        <option value="Laketown">Laketown</option>
                                        <option value="Lakeville">Lakeville</option>
                                        <option value="Lamberton">Lamberton</option>
                                        <option value="Lanesboro">Lanesboro</option>
                                        <option value="Lansing">Lansing</option>
                                        <option value="Laporte">Laporte</option>
                                        <option value="Lauderdale">Lauderdale</option>
                                        <option value="Le+Center">Le Center</option>
                                        <option value="Le+Roy">Le Roy</option>
                                        <option value="Le+Sueur">Le Sueur</option>
                                        <option value="Leech+Lake">Leech Lake</option>
                                        <option value="Lent">Lent</option>
                                        <option value="Leonidas">Leonidas</option>
                                        <option value="Lester+Prairie">Lester Prairie</option>
                                        <option value="Lewiston">Lewiston</option>
                                        <option value="Lexington">Lexington</option>
                                        <option value="Lilydale">Lilydale</option>
                                        <option value="Lime+Springs">Lime Springs</option>
                                        <option value="Lindstrom">Lindstrom</option>
                                        <option value="Lino+Lakes">Lino Lakes</option>
                                        <option value="Litchfield">Litchfield</option>
                                        <option value="Little+Canada">Little Canada</option>
                                        <option value="Little+Falls">Little Falls</option>
                                        <option value="Little+Marais">Little Marais</option>
                                        <option value="Littlefork">Littlefork</option>
                                        <option value="Loman">Loman</option>
                                        <option value="Long+Beach">Long Beach</option>
                                        <option value="Long+Lake">Long Lake</option>
                                        <option value="Long+Prairie">Long Prairie</option>
                                        <option value="Longville">Longville</option>
                                        <option value="Lonsdale">Lonsdale</option>
                                        <option value="Loretta">Loretta</option>
                                        <option value="Loretto">Loretto</option>
                                        <option value="Lowry">Lowry</option>
                                        <option value="Lucan">Lucan</option>
                                        <option value="Luck">Luck</option>
                                        <option value="Lutsen">Lutsen</option>
                                        <option value="Luverne">Luverne</option>
                                        <option value="Lyle">Lyle</option>
                                        <option value="Lynd">Lynd</option>
                                        <option value="Mabel">Mabel</option>
                                        <option value="Macville">Macville</option>
                                        <option value="Madelia">Madelia</option>
                                        <option value="Madison">Madison</option>
                                        <option value="Madison+Lake">Madison Lake</option>
                                        <option value="Magnolia">Magnolia</option>
                                        <option value="Mahtomedi">Mahtomedi</option>
                                        <option value="Maiden+Rock">Maiden Rock</option>
                                        <option value="Maine">Maine</option>
                                        <option value="Makinen">Makinen</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="Manhattan+Beach">Manhattan Beach</option>
                                        <option value="Mankato">Mankato</option>
                                        <option value="Mantorville">Mantorville</option>
                                        <option value="Maple+Grove">Maple Grove</option>
                                        <option value="Maple+Lake">Maple Lake</option>
                                        <option value="Maple+Plain">Maple Plain</option>
                                        <option value="Mapleton">Mapleton</option>
                                        <option value="Maplewood">Maplewood</option>
                                        <option value="Marble">Marble</option>
                                        <option value="Marcell">Marcell</option>
                                        <option value="Margie">Margie</option>
                                        <option value="Marietta">Marietta</option>
                                        <option value="Marine">Marine</option>
                                        <option value="Marine+on+Saint+Croix">Marine on Saint Croix</option>
                                        <option value="Marshall">Marshall</option>
                                        <option value="Martell">Martell</option>
                                        <option value="Mason">Mason</option>
                                        <option value="Max">Max</option>
                                        <option value="Mayer">Mayer</option>
                                        <option value="Maynard">Maynard</option>
                                        <option value="Mazeppa">Mazeppa</option>
                                        <option value="Mc+Grath">Mc Grath</option>
                                        <option value="McDavitt">McDavitt</option>
                                        <option value="McGregor">McGregor</option>
                                        <option value="Meadowlands">Meadowlands</option>
                                        <option value="Medford">Medford</option>
                                        <option value="Medicine+Lake">Medicine Lake</option>
                                        <option value="Medina">Medina</option>
                                        <option value="Meire+Grove">Meire Grove</option>
                                        <option value="Melrose">Melrose</option>
                                        <option value="Menahga">Menahga</option>
                                        <option value="Mendota">Mendota</option>
                                        <option value="Mendota+Heights">Mendota Heights</option>
                                        <option value="Menomonie">Menomonie</option>
                                        <option value="Merrifield">Merrifield</option>
                                        <option value="Merrillan">Merrillan</option>
                                        <option value="Milaca">Milaca</option>
                                        <option value="Milan">Milan</option>
                                        <option value="Milbank">Milbank</option>
                                        <option value="Milltown">Milltown</option>
                                        <option value="Millville">Millville</option>
                                        <option value="Milroy">Milroy</option>
                                        <option value="Miltona">Miltona</option>
                                        <option value="Minneapolis">Minneapolis</option>
                                        <option value="Minneiska">Minneiska</option>
                                        <option value="Minneota">Minneota</option>
                                        <option value="Minnesota+City">Minnesota City</option>
                                        <option value="Minnesota+Lake">Minnesota Lake</option>
                                        <option value="Minnetonka">Minnetonka</option>
                                        <option value="Minnetonka+Beach">Minnetonka Beach</option>
                                        <option value="Minnetrista">Minnetrista</option>
                                        <option value="Minong">Minong</option>
                                        <option value="Mizpah">Mizpah</option>
                                        <option value="Modena">Modena</option>
                                        <option value="Mondovi">Mondovi</option>
                                        <option value="Montevideo">Montevideo</option>
                                        <option value="Montgomery">Montgomery</option>
                                        <option value="Monticello">Monticello</option>
                                        <option value="Montrose">Montrose</option>
                                        <option value="Moose+Lake">Moose Lake</option>
                                        <option value="Mora">Mora</option>
                                        <option value="Morgan">Morgan</option>
                                        <option value="Morris">Morris</option>
                                        <option value="Morristown">Morristown</option>
                                        <option value="Morse">Morse</option>
                                        <option value="Morton">Morton</option>
                                        <option value="Motley">Motley</option>
                                        <option value="Mound">Mound</option>
                                        <option value="Mounds+View">Mounds View</option>
                                        <option value="Mountain+Iron">Mountain Iron</option>
                                        <option value="Mountain+Lake">Mountain Lake</option>
                                        <option value="Murdock">Murdock</option>
                                        <option value="Myrtle">Myrtle</option>
                                        <option value="Nashwauk">Nashwauk</option>
                                        <option value="Neillsville">Neillsville</option>
                                        <option value="Nelson">Nelson</option>
                                        <option value="Nerstrand">Nerstrand</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New+Albin">New Albin</option>
                                        <option value="New+Auburn">New Auburn</option>
                                        <option value="New+Brighton">New Brighton</option>
                                        <option value="New+Effington">New Effington</option>
                                        <option value="New+Germany">New Germany</option>
                                        <option value="New+Hope">New Hope</option>
                                        <option value="New+London">New London</option>
                                        <option value="New+Munich">New Munich</option>
                                        <option value="New+Prague">New Prague</option>
                                        <option value="New+Richland">New Richland</option>
                                        <option value="New+Richmond">New Richmond</option>
                                        <option value="New+Trier">New Trier</option>
                                        <option value="New+Ulm">New Ulm</option>
                                        <option value="New+York+Mills">New York Mills</option>
                                        <option value="Newport">Newport</option>
                                        <option value="Nicollet">Nicollet</option>
                                        <option value="Nimrod">Nimrod</option>
                                        <option value="Nisswa">Nisswa</option>
                                        <option value="Norcross">Norcross</option>
                                        <option value="North+Branch">North Branch</option>
                                        <option value="North+Hudson">North Hudson</option>
                                        <option value="North+Mankato">North Mankato</option>
                                        <option value="North+Oaks">North Oaks</option>
                                        <option value="North+Redwood">North Redwood</option>
                                        <option value="North+Saint+Paul">North Saint Paul</option>
                                        <option value="Northfield">Northfield</option>
                                        <option value="Northome">Northome</option>
                                        <option value="Northrop">Northrop</option>
                                        <option value="Norwood+Young+America">Norwood Young America</option>
                                        <option value="Nowthen">Nowthen</option>
                                        <option value="Oak+Grove">Oak Grove</option>
                                        <option value="Oak+Park">Oak Park</option>
                                        <option value="Oak+Park+Heights">Oak Park Heights</option>
                                        <option value="Oakdale">Oakdale</option>
                                        <option value="Ocheyedan">Ocheyedan</option>
                                        <option value="Odessa">Odessa</option>
                                        <option value="Ogema">Ogema</option>
                                        <option value="Ogilvie">Ogilvie</option>
                                        <option value="Ojibwa">Ojibwa</option>
                                        <option value="Okabena">Okabena</option>
                                        <option value="Olivia">Olivia</option>
                                        <option value="Onalaska">Onalaska</option>
                                        <option value="Onamia">Onamia</option>
                                        <option value="Orleans">Orleans</option>
                                        <option value="Orono">Orono</option>
                                        <option value="Oronoco">Oronoco</option>
                                        <option value="Orr">Orr</option>
                                        <option value="Ortonville">Ortonville</option>
                                        <option value="Osage">Osage</option>
                                        <option value="Osakis">Osakis</option>
                                        <option value="Osceola">Osceola</option>
                                        <option value="Osseo">Osseo</option>
                                        <option value="Ostrander">Ostrander</option>
                                        <option value="Otsego">Otsego</option>
                                        <option value="Ottertail">Ottertail</option>
                                        <option value="Outing">Outing</option>
                                        <option value="Owatonna">Owatonna</option>
                                        <option value="Palisade">Palisade</option>
                                        <option value="Park+Rapids">Park Rapids</option>
                                        <option value="Parkers+Prairie">Parkers Prairie</option>
                                        <option value="Paynesville">Paynesville</option>
                                        <option value="Pease">Pease</option>
                                        <option value="Pelican+Rapids">Pelican Rapids</option>
                                        <option value="Pengilly">Pengilly</option>
                                        <option value="Pennock">Pennock</option>
                                        <option value="Pepin">Pepin</option>
                                        <option value="Pequot+Lakes">Pequot Lakes</option>
                                        <option value="Perham">Perham</option>
                                        <option value="Peterson">Peterson</option>
                                        <option value="Pierz">Pierz</option>
                                        <option value="Pillager">Pillager</option>
                                        <option value="Pine+City">Pine City</option>
                                        <option value="Pine+Island">Pine Island</option>
                                        <option value="Pine+Lake">Pine Lake</option>
                                        <option value="Pine+River">Pine River</option>
                                        <option value="Pine+Springs">Pine Springs</option>
                                        <option value="Pipestone">Pipestone</option>
                                        <option value="Plainview">Plainview</option>
                                        <option value="Plato">Plato</option>
                                        <option value="Plum+City">Plum City</option>
                                        <option value="Plymouth">Plymouth</option>
                                        <option value="Ponsford">Ponsford</option>
                                        <option value="Ponto+Lake">Ponto Lake</option>
                                        <option value="Poplar">Poplar</option>
                                        <option value="Port+Wing">Port Wing</option>
                                        <option value="Portage">Portage</option>
                                        <option value="Porter">Porter</option>
                                        <option value="Prairie+Farm">Prairie Farm</option>
                                        <option value="Prescott">Prescott</option>
                                        <option value="Preston">Preston</option>
                                        <option value="Princeton">Princeton</option>
                                        <option value="Prinsburg">Prinsburg</option>
                                        <option value="Prior+Lake">Prior Lake</option>
                                        <option value="Proctor">Proctor</option>
                                        <option value="Quamba">Quamba</option>
                                        <option value="Racine">Racine</option>
                                        <option value="Radisson">Radisson</option>
                                        <option value="Ramsey">Ramsey</option>
                                        <option value="Randall">Randall</option>
                                        <option value="Randolph">Randolph</option>
                                        <option value="Ranier">Ranier</option>
                                        <option value="Ray">Ray</option>
                                        <option value="Raymond">Raymond</option>
                                        <option value="Reading">Reading</option>
                                        <option value="Reads+Landing">Reads Landing</option>
                                        <option value="Red+Wing">Red Wing</option>
                                        <option value="Redwood+Falls">Redwood Falls</option>
                                        <option value="Remer">Remer</option>
                                        <option value="Renville">Renville</option>
                                        <option value="Rice">Rice</option>
                                        <option value="Rice+Lake">Rice Lake</option>
                                        <option value="Rice+River">Rice River</option>
                                        <option value="Riceville">Riceville</option>
                                        <option value="Richfield">Richfield</option>
                                        <option value="Richmond">Richmond</option>
                                        <option value="Richville">Richville</option>
                                        <option value="Ridgeland">Ridgeland</option>
                                        <option value="River+Falls">River Falls</option>
                                        <option value="Robbinsdale">Robbinsdale</option>
                                        <option value="Roberts">Roberts</option>
                                        <option value="Rochert">Rochert</option>
                                        <option value="Rochester">Rochester</option>
                                        <option value="Rock+Creek">Rock Creek</option>
                                        <option value="Rockford">Rockford</option>
                                        <option value="Rockville">Rockville</option>
                                        <option value="Rogers">Rogers</option>
                                        <option value="Rollingstone">Rollingstone</option>
                                        <option value="Rose+Creek">Rose Creek</option>
                                        <option value="Roseau">Roseau</option>
                                        <option value="Rosemount">Rosemount</option>
                                        <option value="Roseville">Roseville</option>
                                        <option value="Rothsay">Rothsay</option>
                                        <option value="Round+Lake">Round Lake</option>
                                        <option value="Royalton">Royalton</option>
                                        <option value="Rush+City">Rush City</option>
                                        <option value="Rushford">Rushford</option>
                                        <option value="Rushford+Village">Rushford Village</option>
                                        <option value="Rushmore">Rushmore</option>
                                        <option value="Russell">Russell</option>
                                        <option value="Rutledge">Rutledge</option>
                                        <option value="Sacred+Heart">Sacred Heart</option>
                                        <option value="Saginaw">Saginaw</option>
                                        <option value="Saint+Ansgar">Saint Ansgar</option>
                                        <option value="Saint+Anthony">Saint Anthony</option>
                                        <option value="Saint+Augusta">Saint Augusta</option>
                                        <option value="Saint+Bonifacius">Saint Bonifacius</option>
                                        <option value="Saint+Charles">Saint Charles</option>
                                        <option value="Saint+Cloud">Saint Cloud</option>
                                        <option value="Saint+Croix+Falls">Saint Croix Falls</option>
                                        <option value="Saint+Francis">Saint Francis</option>
                                        <option value="Saint+James">Saint James</option>
                                        <option value="Saint+Joseph">Saint Joseph</option>
                                        <option value="Saint+Louis+Park">Saint Louis Park</option>
                                        <option value="Saint+Marys+Point">Saint Marys Point</option>
                                        <option value="Saint+Michael">Saint Michael</option>
                                        <option value="Saint+Paul">Saint Paul</option>
                                        <option value="Saint+Paul+Park">Saint Paul Park</option>
                                        <option value="Saint+Peter">Saint Peter</option>
                                        <option value="Saint+Stephen">Saint Stephen</option>
                                        <option value="Salo">Salo</option>
                                        <option value="Sanborn">Sanborn</option>
                                        <option value="Sand+Lake">Sand Lake</option>
                                        <option value="Sandstone">Sandstone</option>
                                        <option value="Santiago">Santiago</option>
                                        <option value="Sargeant">Sargeant</option>
                                        <option value="Sarona">Sarona</option>
                                        <option value="Sartell">Sartell</option>
                                        <option value="Sauk+Centre">Sauk Centre</option>
                                        <option value="Sauk+Rapids">Sauk Rapids</option>
                                        <option value="Savage">Savage</option>
                                        <option value="Sawyer">Sawyer</option>
                                        <option value="Scandia">Scandia</option>
                                        <option value="Schroeder">Schroeder</option>
                                        <option value="Sebeka">Sebeka</option>
                                        <option value="Shafer">Shafer</option>
                                        <option value="Shakopee">Shakopee</option>
                                        <option value="Shamrock">Shamrock</option>
                                        <option value="Shelby">Shelby</option>
                                        <option value="Sheldon">Sheldon</option>
                                        <option value="Shell+Lake">Shell Lake</option>
                                        <option value="Sherburn">Sherburn</option>
                                        <option value="Shevlin">Shevlin</option>
                                        <option value="Shoreview">Shoreview</option>
                                        <option value="Shorewood">Shorewood</option>
                                        <option value="Shotley">Shotley</option>
                                        <option value="Sibley">Sibley</option>
                                        <option value="Side+Lake">Side Lake</option>
                                        <option value="Silver+Bay">Silver Bay</option>
                                        <option value="Silver+Lake">Silver Lake</option>
                                        <option value="Siren">Siren</option>
                                        <option value="Skelton">Skelton</option>
                                        <option value="Slater">Slater</option>
                                        <option value="Slayton">Slayton</option>
                                        <option value="Sleepy+Eye">Sleepy Eye</option>
                                        <option value="Sobieski">Sobieski</option>
                                        <option value="Solon+Springs">Solon Springs</option>
                                        <option value="Somerset">Somerset</option>
                                        <option value="Soudan">Soudan</option>
                                        <option value="South+Haven">South Haven</option>
                                        <option value="South+Range">South Range</option>
                                        <option value="South+Saint+Paul">South Saint Paul</option>
                                        <option value="Sparta">Sparta</option>
                                        <option value="Spicer">Spicer</option>
                                        <option value="Spooner">Spooner</option>
                                        <option value="Spring+Grove">Spring Grove</option>
                                        <option value="Spring+Lake">Spring Lake</option>
                                        <option value="Spring+Lake+Park">Spring Lake Park</option>
                                        <option value="Spring+Park">Spring Park</option>
                                        <option value="Spring+Valley">Spring Valley</option>
                                        <option value="Springbrook">Springbrook</option>
                                        <option value="Springfield">Springfield</option>
                                        <option value="Squaw+Lake">Squaw Lake</option>
                                        <option value="Stacy">Stacy</option>
                                        <option value="Stanchfield">Stanchfield</option>
                                        <option value="Stanton">Stanton</option>
                                        <option value="Staples">Staples</option>
                                        <option value="Star+Prairie">Star Prairie</option>
                                        <option value="Starbuck">Starbuck</option>
                                        <option value="Sterling">Sterling</option>
                                        <option value="Stewart">Stewart</option>
                                        <option value="Stewartville">Stewartville</option>
                                        <option value="Stillwater">Stillwater</option>
                                        <option value="Stockholm">Stockholm</option>
                                        <option value="Stockton">Stockton</option>
                                        <option value="Stokes">Stokes</option>
                                        <option value="Stone+Lake">Stone Lake</option>
                                        <option value="Storden">Storden</option>
                                        <option value="Strum">Strum</option>
                                        <option value="Sturgeon+Lake">Sturgeon Lake</option>
                                        <option value="Sunburg">Sunburg</option>
                                        <option value="Sunfish+Lake">Sunfish Lake</option>
                                        <option value="Sunrise">Sunrise</option>
                                        <option value="Superior">Superior</option>
                                        <option value="Svea">Svea</option>
                                        <option value="Swan+River">Swan River</option>
                                        <option value="Swanville">Swanville</option>
                                        <option value="Swatara">Swatara</option>
                                        <option value="Sylvan">Sylvan</option>
                                        <option value="Taconite">Taconite</option>
                                        <option value="Talmoon">Talmoon</option>
                                        <option value="Tamarack">Tamarack</option>
                                        <option value="Taopi">Taopi</option>
                                        <option value="Taylors+Falls">Taylors Falls</option>
                                        <option value="Thorp">Thorp</option>
                                        <option value="Tilden">Tilden</option>
                                        <option value="Tofte">Tofte</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Toivola">Toivola</option>
                                        <option value="Tonka+Bay">Tonka Bay</option>
                                        <option value="Tony">Tony</option>
                                        <option value="Tower">Tower</option>
                                        <option value="Tracy">Tracy</option>
                                        <option value="Trade+Lake">Trade Lake</option>
                                        <option value="Trego">Trego</option>
                                        <option value="Trempealeau">Trempealeau</option>
                                        <option value="Trimont">Trimont</option>
                                        <option value="Trommald">Trommald</option>
                                        <option value="Trosky">Trosky</option>
                                        <option value="Troy">Troy</option>
                                        <option value="Truman">Truman</option>
                                        <option value="Turner">Turner</option>
                                        <option value="Turtle+Lake">Turtle Lake</option>
                                        <option value="Twin+Lakes">Twin Lakes</option>
                                        <option value="Two+Harbors">Two Harbors</option>
                                        <option value="Tyler">Tyler</option>
                                        <option value="Underwood">Underwood</option>
                                        <option value="Upsala">Upsala</option>
                                        <option value="Utica">Utica</option>
                                        <option value="Vadnais+Heights">Vadnais Heights</option>
                                        <option value="Vasa">Vasa</option>
                                        <option value="Vergas">Vergas</option>
                                        <option value="Vermillion">Vermillion</option>
                                        <option value="Verndale">Verndale</option>
                                        <option value="Vernon+Center">Vernon Center</option>
                                        <option value="Veseli">Veseli</option>
                                        <option value="Vesta">Vesta</option>
                                        <option value="Victoria">Victoria</option>
                                        <option value="Villard">Villard</option>
                                        <option value="Vining">Vining</option>
                                        <option value="Viola">Viola</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Waasa">Waasa</option>
                                        <option value="Wabasha">Wabasha</option>
                                        <option value="Wabasso">Wabasso</option>
                                        <option value="Wabedo">Wabedo</option>
                                        <option value="Waconia">Waconia</option>
                                        <option value="Wadena">Wadena</option>
                                        <option value="Wahkon">Wahkon</option>
                                        <option value="Waite+Park">Waite Park</option>
                                        <option value="Walker">Walker</option>
                                        <option value="Walnut+Grove">Walnut Grove</option>
                                        <option value="Waltham">Waltham</option>
                                        <option value="Wanamingo">Wanamingo</option>
                                        <option value="Wanda">Wanda</option>
                                        <option value="Warba">Warba</option>
                                        <option value="Warren">Warren</option>
                                        <option value="Warsaw">Warsaw</option>
                                        <option value="Wascott">Wascott</option>
                                        <option value="Waseca">Waseca</option>
                                        <option value="Washburn">Washburn</option>
                                        <option value="Waskish">Waskish</option>
                                        <option value="Waterford">Waterford</option>
                                        <option value="Watertown">Watertown</option>
                                        <option value="Waterville">Waterville</option>
                                        <option value="Watkins">Watkins</option>
                                        <option value="Watson">Watson</option>
                                        <option value="Waubun">Waubun</option>
                                        <option value="Waumandee">Waumandee</option>
                                        <option value="Wausau">Wausau</option>
                                        <option value="Waverly">Waverly</option>
                                        <option value="Wayzata">Wayzata</option>
                                        <option value="Webb+Lake">Webb Lake</option>
                                        <option value="Webster">Webster</option>
                                        <option value="Welch">Welch</option>
                                        <option value="Welcome">Welcome</option>
                                        <option value="Wells">Wells</option>
                                        <option value="Wendell">Wendell</option>
                                        <option value="West+Concord">West Concord</option>
                                        <option value="West+Fargo">West Fargo</option>
                                        <option value="West+Lakeland">West Lakeland</option>
                                        <option value="West+Saint+Paul">West Saint Paul</option>
                                        <option value="West+Salem">West Salem</option>
                                        <option value="West+Union">West Union</option>
                                        <option value="Westbrook">Westbrook</option>
                                        <option value="Westport">Westport</option>
                                        <option value="Weyerhaeuser">Weyerhaeuser</option>
                                        <option value="Whalan">Whalan</option>
                                        <option value="Wheaton">Wheaton</option>
                                        <option value="Wheeler">Wheeler</option>
                                        <option value="White">White</option>
                                        <option value="White+Bear+Lake">White Bear Lake</option>
                                        <option value="White+Bear+Township">White Bear Township</option>
                                        <option value="Whitehall">Whitehall</option>
                                        <option value="Wilder">Wilder</option>
                                        <option value="Willard">Willard</option>
                                        <option value="Willernie">Willernie</option>
                                        <option value="Willmar">Willmar</option>
                                        <option value="Willow+River">Willow River</option>
                                        <option value="Wilmot">Wilmot</option>
                                        <option value="Wilson">Wilson</option>
                                        <option value="Windom">Windom</option>
                                        <option value="Winnebago">Winnebago</option>
                                        <option value="Winona">Winona</option>
                                        <option value="Winsted">Winsted</option>
                                        <option value="Winter">Winter</option>
                                        <option value="Winthrop">Winthrop</option>
                                        <option value="Winton">Winton</option>
                                        <option value="Wirt">Wirt</option>
                                        <option value="Wood+Lake">Wood Lake</option>
                                        <option value="Woodbury">Woodbury</option>
                                        <option value="Woodland">Woodland</option>
                                        <option value="Woodville">Woodville</option>
                                        <option value="Worthington">Worthington</option>
                                        <option value="Wrenshall">Wrenshall</option>
                                        <option value="Wright">Wright</option>
                                        <option value="Wykoff">Wykoff</option>
                                        <option value="Wyoming">Wyoming</option>
                                        <option value="Young+America">Young America</option>
                                        <option value="Zim">Zim</option>
                                        <option value="Zimmerman">Zimmerman</option>
                                        <option value="Zumbro+Falls">Zumbro Falls</option>
                                        <option value="Zumbrota">Zumbrota</option>
                                    </select>
                                    <script>
                                        window.addEventListener('DOMContentLoaded', (event) => {
                                            // Initialize select2
                                            $('select[name="city_select"]').select2();
                                        });
                                    </script>
                                </div>
                                <div class="col-md">
                                    <select name="propertyType" id="freelancer_mamun" data-ux="InputSelectElement" id="mls-input25" class="x-el x-el-select c2-1 c2-2 c2-3o c2-3p c2-3q c2-s c2-f c2-21 c2-1e c2-2q c2-3r c2-3s c2-3t c2-3u c2-28 c2-29 c2-3v c2-3w c2-3 c2-3h c2-3x c2-3y c2-3z x-d-ux">
                                        <option  data-placeholder="true" value="">Listing Type</option>
                                        <option value="Commercial">Commercial</option>
                                        <option value="Farm">Farm</option>
                                        <option value="Land">Land</option>
                                        <option value="Multifamily">Multifamily</option>
                                        <option value="Rental">Rental</option>
                                        <option value="Residential">Residential</option>
                                    </select>
                                </div>
                            </div>

                            <div id="settel" style="margin-top: 20px" class="row">
                                <div class="col-md">
                                    <select name="sortBy" id="freelancer_mamun" data-ux="InputSelectElement" id="mls-input25" class="x-el x-el-select c2-1 c2-2 c2-3o c2-3p c2-3q c2-s c2-f c2-21 c2-1e c2-2q c2-3r c2-3s c2-3t c2-3u c2-28 c2-29 c2-3v c2-3w c2-3 c2-3h c2-3x c2-3y c2-3z x-d-ux" >
                                        <option value="" data-placeholder="true">Sort By</option>
                                        <option value="newest">Newest</option>
                                        <option value="oldest">Oldest</option>
                                        <option value="lowToHigh">Least Expensive to Most</option>
                                        <option value="HighToLow">Most Expensive to Least</option>
                                        <option value="bed_lth">Bedrooms (Low to High)</option>
                                        <option value="bed_htl">Bedrooms (High to Low)</option>
                                        <option value="bath_lth">Bathrooms (Low to High)</option>
                                        <option value="bath_htl">Bathrooms (High to Low)</option>
                                    </select>
                                </div>
                                <div class="col-md">
                                    <select name="beds" id="freelancer_mamun" data-ux="InputSelectElement" class="x-el x-el-select c2-1 c2-2 c2-3o c2-3p c2-3q c2-s c2-f c2-21 c2-1e c2-2q c2-3r c2-3s c2-3t c2-3u c2-28 c2-29 c2-3v c2-3w c2-3 c2-3h c2-3x c2-3y c2-3z x-d-ux">
                                        <option value="">Bedrooms</option>
                                        <option value="Any">Any Number</option>
                                        <option value=">=1">1+</option>
                                        <option value=">=2">2+</option>
                                        <option value=">=3">3+</option>
                                        <option value=">=4">4+</option>
                                        <option value=">=5">5+</option>
                                        <option value=">=6">6+</option>
                                    </select>
                                </div>
                            </div>

                            <div  id="settel" style="margin-top: 20px" class="row">
                                <div class="col-md">
                                    <select name="baths" id="freelancer_mamun" data-ux="InputSelectElement" class="x-el x-el-select c2-1 c2-2 c2-3o c2-3p c2-3q c2-s c2-f c2-21 c2-1e c2-2q c2-3r c2-3s c2-3t c2-3u c2-28 c2-29 c2-3v c2-3w c2-3 c2-3h c2-3x c2-3y c2-3z x-d-ux">
                                        <option value="">Baths</option>
                                        <option value="Any">Any Number</option>
                                        <option value=">=1">1+</option>
                                        <option value=">=2">2+</option>
                                        <option value=">=3">3+</option>
                                        <option value=">=4">4+</option>
                                        <option value=">=5">5+</option>
                                        <option value=">=6">6+</option>
                                    </select>
                                </div>
                                <div class="col-md">
                                    <input name="minPrice" id="freelancer_mamun" type="text" placeholder="Min Price">
                                </div>
                            </div>


                            <div  id="settel" style="margin-top: 20px" class="row">
                                <div class="col-md">
                                    <input name="maxPrice" id="freelancer_mamun" type="text" placeholder="Max-Price">
                                </div>
                                <div class="col-md">
                                        <input id="freelancer_mamunn" type="submit" value="Search-Now" />
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>


    </div>
    <img style="position:" src="https://preview.uideck.com/items/start/assets/images/header-shape.svg" width="100%" alt="">
</div>
<!----this is about with video section--->
<div class="abt">
    <div class="container">
        <div class="row">
            <div class="col-md">

                <iframe id="video" src="https://www.youtube.com/embed/e4pMGxLUZTQ" width="560" height="315" frameborder="0"></iframe>

            </div>
            <div id="payas" class="col-md">
                <p style="margin:0;color: gray;font-size: 20px;" class="text-justify"><span class="x-el x-el-span c1-ac c1-ad c1-b c1-7f c1-7i c1-7k c1-7l c1-7m x-d-ux">According to HousingWire, the most influential source of real estate news and information for the U.S. mortgage and housing markets, Forsalebyweb.com offers home buyers and home sellers something that Zillow and others like it can’t: &nbsp;COLD HARD CASH!  The Smartphone Real Estate Company® that lets you Turn Your Smartphone into A Real Estate Agent™. You'll Never Have To Meet Another Real Estate Agent Again. Unless You Want To™. Say good-bye to the S-L-O-W, back-and-forth, time-consuming, and "on-call" aspects of traditional real estate: Our Service: It's in Your Phone®</span></p>


            </div>
        </div>
    </div>
</div>
<!-----another page--->
<div class="virtual">
    <!------------------ Hover Effect Style : Demo - 1 --------------->
    <div class="container">
        <h2 class="text-center">You'll Never Have to Meet Another Real Estate Agent Again. Unless You Want To.™</h2>
        <div class="row mt-40">
            <div data-toggle="modal" data-target="#exampleModal" class="col-md-4 col-sm-6">
                <div class="box1">
                    <img data-toggle="modal" data-target="#exampleModal" src="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/banner3.2.jpg/:/rs=w:370,m,cg:true" alt="">
                    <h3 class="title">Williamson</h3>
                    <ul class="icon">
                        <li data-toggle="modal" data-target="#exampleModal"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li data-toggle="modal" data-target="#exampleModal"><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div  data-toggle="modal" data-target="#exampleModal2" class="col-md-4 col-sm-6">
                <div class="box1">
                    <img  data-toggle="modal" data-target="#exampleModal2" src="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/banner7.jpg/:/rs=w:370,m,cg:true" alt="" class="img-thumbn">
                    <h3 class="title">Kristiana</h3>
                    <ul class="icon">
                        <li  data-toggle="modal" data-target="#exampleModal2"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li  data-toggle="modal" data-target="#exampleModal2"><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div data-toggle="modal" data-target="#exampleModal3" class="col-md-4 col-sm-6">
                <div class="box1">
                    <img data-toggle="modal" data-target="#exampleModal3" src="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/banner4.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,m,cg:true" alt="">
                    <h3 class="title">Kristiana</h3>
                    <ul class="icon">
                        <li data-toggle="modal" data-target="#exampleModal3"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li data-toggle="modal" data-target="#exampleModal3"><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!--modal--->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/banner3.2.jpg/:/rs=w:370,m,cg:true" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!--modal--->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/banner7.jpg/:/rs=w:370,m,cg:true" alt="" class="img-thumbn">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--modal--->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img data-toggle="modal" data-target="#exampleModal3" src="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/banner4.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,m,cg:true" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--this is smart phone virtual section--->
<div class="smart">
    <h3  class="text-center">Articles & Tips</h3>
    <p class="text-center">If you take this tips you will get benifit.</p>
    <div class="container">
        <div class="row">
            <div id="fanso" class="col-md">
                <img src="img/bh1.jpg" width="100%" alt="">
                <br>
                <p>Business</p>
                <h4>Skills That You Can Learn In The Real Estate Market</h4>
                <hr>
            </div>
            <div id="fanso" class="col-md">
                <img src="img/bh2.jpg" width="100%" alt="">
                <br>
                <p>Business</p>
                <h4>Bedroom Colors You’ll Never <br class="dn-1199"> Regret</h4>
                <hr>
            </div>
            <div id="fanso" class="col-md">
                <img src="img/bh3.jpg" width="100%" alt="">
                <br>
                <p>Business</p>
                <h4>5 Essential Steps for Buying an Investment</h4>
                <hr>

            </div>
        </div>
    </div>
</div>
<!----this is social section--->
<div class="social">
    <h3 class="text-center">All You Do Is Use Zoom, Skype, FaceBook & Web!</h3>

    <section style="margin-top: 70px" id="why-chose" class="whychose_us bgc-f7 pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <img src="https://logodownload.org/wp-content/uploads/2017/05/skype-logo-1.png" width="30%;" alt="">

                        </div>
                        <div class="details">
                            <h4>Communication With Skype.</h4>
                            <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <img src="https://www.stickpng.com/assets/images/5e8ce318664eae0004085461.png" width="30%" alt="">
                        </div>
                        <div class="details">
                            <h4>Communication With Zoom.</h4>
                            <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <img src="https://www.crossover.si/wp-content/uploads/2018/06/Facebook-icon.png" width="30%" alt="">
                        </div>
                        <div class="details">
                            <h4>Communication With Facebook.</h4>
                            <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!----portfolio-->
<div class="port">

    <section class="testimonial-section2">
        <div class="row text-center">
            <div class="col-12">
                <div style="color: #222;font-family: 'Nunito', sans-serif;" class="h2">Testimonial</div>
            </div>
        </div>
        <div id="testim" class="testim">

            <!--         <div class="testim-cover"> -->
            <div class="wrap">

                <span style="z-index: 100" id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span style="z-index: 100" id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">
                    <div class="active">
                        <div class="img"><img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg" alt=""></div>
                        <div class="h4">Kellie</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt=""></div>
                        <div class="h4">Jessica</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>
                        <div class="h4">Kellie</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt=""></div>
                        <div class="h4">Jessica</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/gUPag7/image.jpg" alt=""></div>
                        <div class="h4">Kellie</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>

                </div>
            </div>
        </div>
        <!--         </div> -->
    </section>

</div>
<hr>



<!---our partners--->


<div class="container text-center my-3">
    <h3>our partners</h3>
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
                <div class="col-3 float-left"><img class="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo1.png"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo2.png"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo3.png"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo1.png"></div>
            </div>
            <div class="carousel-item row no-gutters">
                <div class="col-3 float-left"><img class="img-fluid" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo2.png"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo3.png"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo2.png"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo3.png"></div>
            </div>
        </div>
        <a id="altra_hover_partner" style="background-color: #333" class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a id="altra_hover_partner" style="background-color: #333" class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

@include('fsbw-layout.common.footer')
