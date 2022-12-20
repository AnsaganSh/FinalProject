
<!DOCTYPE html>
<html>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot" style="width:100%;max-width:70%;margin:20%"></div>

<script>
var xArray = [50,60,70,80,90,100,110,120,13 ,140,150];
var yArray = [7,8,8,9,9,9,10,11,14,14,15];

// Define Data
var data = [{
  x:xArray,
  y:yArray,
  mode:"markers"
}];

// Define Layout
var layout = {
  xaxis: {range: [40, 160], title: "Square Meters"},
  yaxis: {range: [5, 16], title: "Price in Millions"},  
  title: "House Prices vs. Size"
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>
        Home Page
    </title>
</head>

<body>
    <header>

        <div id="flexHeader">
            <div>
                <p id="tarihs">
                  <a href="http://localhost/WebGroupProject/index1.php">  <button id="tarih">Kazakhs<br>history</button></a>

                </p>
            </div>
            <div>
                <p id="tarihs">
                  <a   href="http://localhost/WebGroupProject/index2.php"><button id="tarih">National <br> food</button></a>

                </p>
            </div>

            <div>
                <p id="tarihs">
                 <a  href="http://localhost/WebGroupProject/index3.php">   <button id="tarih">National<br>drink</button></a>

                </p>
            </div>
            <div>
                <p id="tarihs">
                  <a href="http://localhost/WebGroupProject/index4.php">  <button id="tarih" >National<br>games</button></a>

                </p>
            </div>
            <div>
                <p id="tarihs">
                  <a href="http://localhost/WebGroupProject/index5.php">  <button id="tarih" >Kazakhs<br>clothes</button></a>

                </p>
            </div>
            <div>
                <p id="tarihs">
                 <a  href="http://localhost/WebGroupProject/index6.php">   <button id="tarih">Kazakhs<br>sport</button></a>

                </p>
            </div>
            <div>
                <p id="tarihs">
                 <a href="http://localhost/WebGroupProject/index7.php">   <button id="tarih" >National <br>dances</button></a>
                </p>
            </div>
            <div>
                <p id="tarihs">
                 <a href="http://localhost/WebGroupProject/index8.php">   <button id="tarih" >Add Info<br>or quation</button></a>
            </div>

        </div>

    </header>

    <h1 id='nadpis'>Who are the Kazakhs and where did<br> they come from?</h1>
    <div class="flex-container1">
        <div id="box2">

            <img id='boxImg' src='https://cdn.nur.kz/images/720/pogudxcj0h4ffcqh8.webp'>
            <p id='boxTitle'>Кто такие казахи:<br> происхождение казахов</p>
            <span id='boxText'>Это интересно! Термин «казах» происходит от тюркского слова «казак», что означает ‘свободный’, ‘вольный’, ‘независимый’ или ‘скиталец’.</span>
            <br>
            <!-- <strong class="d-inline-block mb-2 text-primary"> -->
                <div class="dropup">
                    <button class="dropbtn">Read more</button>
                    <div class="dropup-content">
                        Кто такие казахи: происхождение казахов<br>
                        Образование народности, или этногенез, — это длительный и чрезвычайно сложный процесс. Необходимо, чтобы сформировался общий язык, внешние, духовные и культурные черты. Кроме того, нужна собственная территория.
                        <br>
                        Это интересно! Термин «казах» происходит от тюркского слова «казак», что означает ‘свободный’, ‘вольный’, ‘независимый’ или ‘скиталец’.
                        <br>
                        По мнению историков, главное событие в формировании казахского народа произошло в середине XV века. Тогда первые казахские ханы Жанибек и Керей увели в Семиречье около 100 тысяч человек. Это произошло во время восстания против узбекского хана Абулхаира.
                        <br>
                        Поиск лучшей жизни прикрепил к людям термин «узбек-казак», что в переводе — ‘вольный узбек’ или ‘узбек, ушедший скитаться’. Через сто лет термин «узбек» стали применять к населению Средней Азии, а люди, оставшиеся на территории западного Семиречья, стали зваться казахами.
                        <br>
                        В начале ХVI столетия к казахам присоединились несколько тюркских племен и кочевников, которые окончательно сформировали этническую группу. Это был завершающий этап этногенеза казахского народа. Теперь предлагаем подробнее разобраться в процессах, которые предшествовали становлению современных казахов.
                        На начало железного века Казахстан населяли саки, сарматы, усуни и кангюи. Согласно записям Геродота, саки отчаянно боролись с персами, отстаивая границы своих земель. Известно, что велась война с царями Дарием I и Киром II.
                        <br>
                        Читайте также: Топ-10 личностей в истории Казахстана
                        <br>
                        Сильное влияние на образование казахского народа оказали тюркские племена. Союз усуней и кангюев привел к возникновению государства Кангюй и заселению Восточного Туркестана. В Старшем жузе до сих пор сохранились роды Канлы и Сары уйсын. К концу железного века внешний облик предков казахов оставался европейским. Однако переселение гуннов внесло монголоидный элемент в облик представителей древних племен Казахстана.
                        <br>
                    </div>
                <!-- </div> -->
                </div>
            <!-- </strong> -->
        </div>
        <div id="box2">

            <img id='boxImg' src='https://cdn.nur.kz/images/720/pogudx168pei7gqri.webp'>
            <p id='boxTitle'>Образование казахской<br> народности</p>
            <span id='boxText'>Это интересно! Термин «казах» происходит от тюркского слова «казак», что означает ‘свободный’, ‘вольный’, ‘независимый’ или ‘скиталец’.</span>
            <br>
            <!-- <strong class="d-inline-block mb-2 text-primary"> -->
                <div class="dropup">
                    <button class="dropbtn">Read more</button>
                    <div class="dropup-content">
                        Откуда произошли казахи? Этот вопрос охватывает почти тысячу лет истории. Условно процесс этногенеза можно разделить на три этапа:
                        <br>
                        Этап №1
                        <br>

                        Берет начало в бронзовом веке. В это время по территории Центральной Азии расселяются различные племена. Их основу составляли европеоидные народности, и внешний вид их был соответствующим.
                        <br>

                        По мнению ученых, именно здесь зародилось скотоводческое кочевничество. Тут же приручили и объездили первого коня. Заметный след в зарождении культуры казахов в то время сыграли андроновские племена. На территории Казахстана сохранилось немало их построек и захоронений. А на найденных горшках и кувшинах проглядываются узоры, которые можно встретить на казахских коврах.


                    </div>
                </div>
            <!-- </strong> -->

        </div>

    </div>
    <div class="flex-container1">
        <div id="box2">
            <img id='boxImg' src='https://cdn.nur.kz/images/720/pogudx11th6qh6e69.webp'>
            <p id='boxTitle'>Кто такие казахи:<br> происхождение казахов</p>
            <span id='boxText'>Это интересно! Термин «казах» происходит от тюркского слова «казак», что означает ‘свободный’, ‘вольный’, ‘независимый’ или ‘скиталец’.</span>
            <br>
            <!-- <strong class="d-inline-block mb-2 text-primary"> -->
            <div class="dropup">
                <button class="dropbtn">Read more</button>
                <div class="dropup-content">

                    Этап №2<br>
                    Начался в VI веке н. е. с массового расселения тюркских племен. Они смешивались с потомками скифских племен, усуней и кангюев. Изменился язык и культура древнего народа. С приходом арабов среди оседлых племен распространился ислам, а также исламский календарь.
                    <br>
                    С VI по XIII века на территории современного Казахстана возникают крупные тюркские государства. Тюргешский каганат был мощной державой, однако со временем он распался на Карлукский и Кимакский каганаты, а также Огузскую державу. После них образовалось Караханидское государство, впервые среди тюркских стран принявшее исламскую религию.
                    <br> В XI веке объединение тюркских племен привело к появлению исторического региона Евразии — Дешт-и-Кипчак (Степь кипчаков). В российской истории его называют Половецкой степью. Развитие и взаимосвязь скотоводческого кочевничества, земледелия и городского уклада в то время серьезно повлияли на становление казахской этнической группы.
                    <br>
                    Значительный вклад в облик современных казахов внесли завоевания Чингисхана и возникновение Золотой Орды. Монголоидные черты обусловлены ассимиляцией тюрками разрозненных монгольских племен.
                    <br>
                    Этап №3 <br>
                    Завершающий этап формирования казахского народа связывают с объединением всех родов и племен тюрков, которые уже обрели единый облик. Это произошло в период с XIV по XV века, после распада Золотой Орды. После нее возникли отдельные государства: Ак-Орда (Белая Орда), Ногайская Орда и Узбекское ханство. <br>
                </div>
            </div>
            <!-- </strong> -->
        </div>
        <div id="box2">

            <img id='boxImg' src='https://cdn.nur.kz/images/720/pogudx2koqrv9bqe9.webp'>
            <p id='boxTitle'>Образование казахской<br> народности</p>
            <span id='boxText'>Это интересно! Термин «казах» происходит от тюркского слова «казак», что означает ‘свободный’, ‘вольный’, ‘независимый’ или ‘скиталец’.</span>
            <br>
            <!-- <strong class="d-inline-block mb-2 text-primary"> -->
            <div class="dropup">
                <button class="dropbtn">Read more</button>
                <div class="dropup-content">
                    В 1458 году Жанибек и Керей, недовольные правлением узбекского хана, увели людей с Сырдарьи в восточное Семиречье, где основали Казахское ханство. На тот момент уже сформировался единый язык, названный впоследствии казахским. Под предводительством хана Касыма казахи отбили у ногайцев Сарайчик — столицу Ногайской Орды — и расширили территорию государства от Иртыша до Урала. К 1521 году численность казахов достигла миллиона человек.
                    <br><br> Это народ с самобытным языком и культурой, который формировался почти тысячу лет. Многие народности сгинули с течением времени, но казахи выжили и основали страну с огромным потенциалом. Сейчас в Республике Казахстан живет более 18 миллионов человек, и каждый год эта цифра растет. Казахстанцы воспевают Великую Степь в память о державе Дешт-и-Кипчак — колыбели независимого Казахстана, который мы поздравляем с Днем Конституции.
                </div>
            </div>
            <!-- </strong> -->

        </div>

    </div>
    <iframe id='oldCart' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22459639.99350312!2d49.03843825265956!3d46.5940518439738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38a91007ecfca947%3A0x5f7b842fe4b30e1b!2z0JrQsNC30LDRhdGB0YLQsNC9!5e0!3m2!1sru!2skz!4v1670951199613!5m2!1sru!2skz" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- <img id='oldCart' src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%BE%D0%B5_%D1%85%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE.png/640px-%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D0%BA%D0%BE%D0%B5_%D1%85%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE.png'> -->
    <!-- <img id='oldCart' src='https://upload.wikimedia.org/wikipedia/commons/e/e1/%D0%9F%D0%BE%D0%B7%D0%9A%D0%B0%D1%80%D1%82%D0%B0_%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD.svg'> -->

    <div class="flex-container">
        <div id="box1"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/OsEU3bTKqcc" title="Краткая история Казахского Ханства" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

        <div id="box1"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/m9auYGEbRfs" title="Откуда появились Казахи? Образование Казахского Ханства за 5 минут. Как Чингисхан повлиял на это?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

    </div>



    <footer>


    </footer>

</body>

</html>