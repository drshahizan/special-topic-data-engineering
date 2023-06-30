<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/head.php'; ?>
<?php include 'layouts/head-style.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>DashBoard | Noctua</title>
    <!-- Include necessary stylesheets and scripts -->
    <?php include 'layouts/vendor-scripts.php'; ?>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="assets/js/pages/dashboard.init.js"></script>
    <script src="assets/js/app.js"></script>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body data-topbar="dark" data-layout="horizontal" data-layout-scrollable="true">

     <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'layouts/horizontal-menu.php'; ?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h1 class="mb-sm-0 font-size-18"><b>Redditor's View Towards Anwar Ibrahim as Malaysia's 10th Prime Minister.</b></h1>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="row">
                                    <div id="sentiment-distribution" class="chart-container"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Sentiment Word Cloud</h4>
                                            <div class="table-responsive">
                                                <div id="word-clouds" class="chart-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="card">
                                <div class="card-body">
                                    <p>
                                        This is the overall sentiment distribution where we put together all the sentiments along with its frequency into a single pie chart. We can see there are almost 70% of neutral comments regarding DSAI followed by 18.1% of positive comments and the rest being negative comments. Here we can verify the assumption we made earlier, most of the comments he received were neutral comments, which means the public tolerates him.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4"></h4>
                                    <div class="table-responsive">
                                        <div id="distribution"></div>
                                        <div id="time-series"></div>
                                        
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Example Text for Each Sentiment</h4>

                                    <table>
  <tr>
    <th>Sentiment</th>
    <th>Comment</th>
   
  </tr>
  <tr>
    <td>Positive</td>
    <td>
        1. Alhamdulillah, Syabas DSAI and the rest of the political parties for agreeing to form the first Malaysian Unity Government.
        <br>
        2. I'm happy at this news. It may not be a true PH government, but that's a thousand times better than a PN government.
        <br>
        3. IM GONNA FUCKING CRY I really thought PN was gonna be the ruling government, I'm so glad I was wrong ðŸ˜­ðŸ”¥ðŸ’¯
        <br>
        4. AKU NAK NANGIS WEH ALHAMDULILLAH ðŸ«‚ðŸ˜­
        <br>
        5. Congrats Malaysia, I hope the Anwar Regime will cooperate well with us here in Singapore ðŸ™ðŸ»

    </td>
    
    
  </tr>
  <tr>
    <td>Neutral</td>
    <td>
        1. "The real battle begin now, if they don't provide any significant changes to the table, it would be hard to maintain their position after 5 years cause those who voted for BN to not vote for PH and vice versa will be pissed af if things is still the same.

5 years is too short for changes but it must be done in order to avoid the takeover of opposition."


        <br>
        2. "Good point. But there will always be a very *large* amount of people who are like:

""Wait, in 4 years you couldn't clean up a mess that accumulated over 50-year-old? LITERALLY USELESS."""


        <br>
        3. "And the sweetest part is that it doesn't involve the Old Man. In fact the Old Man and his entire party was utterly defeated into oblivion. So he doesn't have to feel indebted to him.

The story is over, old man. You had your 90+ years. Please rest."


        <br>
        4. But take note they still have 73 seats in Parliament, and the votes of the Malay Heartland, especially the youths. PH is going to work extra hard for the next 5 years.


        <br>
        5. Everyone is mentioning DSAI has became the 10th PM. But anyone have any idea which coalition besides PH are forming the gov?


    </td>
    
  </tr>
  <tr>
    <td>Negative</td>
    <td>
        1. "Anwar has always portrayed modesty and conservatism in his life. What he is doing now is doubling down on these traits because he is leveraging it against UMNO and GPS. By constantly advertising his modesty and conservative on social media, he is showcasing that he is the 'man of the people'. He wants to get the support of as many people as possible, so that if UMNO or GPS decides to pull out, he can immediately rally the people to direct their anger to UMNO or GPS....*see, they don't want unity, they are greedy, they don't care about the people, not like me*

i find it cringy, but most Malaysians are simpletons so this strategy will most probably work"


        <br>
        2. "So basically of the 3 big/main political coalitions in this country, 2 leaders of them (Anwar and Muhyddin) has already publicly stated that there are court clusters that want them to interfere with the cases (remember that Muhyddin said this in a national televised address when he stepped down or around that time) as condition for them to maintain power. 

And for the last one (BN/UMNO) it can be heavily seen from places like after Johor elections that the current face/leader of the coalition (Sabri) has his hands very much tied by the influence of the court cluster. 

And yet court cluster gang still has so many die hard supporters willing to go to the end of the world to defend and support them sigh"


        <br>
        3. "If this is true he could've just accepted it, runs his 'reformation' and be damned on their demands 

Anwar at this point should've let his protÃ©gÃ© like Rafizi run for PM and he act as advisor. Would really smash the perception that PKR exists just to let Anwar be PM"


        <br>
        4. anwar is born and bred umno bro. He might represent the liberal umno like nazri aziz. But he still umno right down to core. Everyone listen to expert, right until what expert is saying ran contrary to what benefit his faction/party/wellbeing. Then they just stop listening to expert. Being elected is the main priority of a politician, if expert tell them to shoot them in the leg what do you think they will do.


        <br>
        5. He's talking to his gullible voters who still believe in whatever bs he's talking about.


    </td>
    
  </tr>
</table>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    
                                            
                     
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include 'layouts/footer.php'; ?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <?php include 'layouts/vendor-scripts.php'; ?>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="assets/js/pages/dashboard.init.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Retrieve the chart data from the server-side script
        fetch('Visualization.json')
            .then(response => response.text()) // Read response as text
            .then(data => {
                // Parse the chart data from JSON
                const charts = JSON.parse(data);

                // Render word clouds
                const wordCloudsData = charts[charts.length - 1].wordClouds;

                // Create a container for the row
                const rowContainer = document.createElement('div');
                rowContainer.classList.add('row');

                // Append the row container to the parent element
                const parentContainer = document.getElementById('word-clouds');
                parentContainer.appendChild(rowContainer);

                wordCloudsData.forEach((wordCloudData, index) => {
                    const divId = 'word-cloud-' + index;
                    // Create a card container
                    const card = document.createElement('div');
                    card.classList.add('card');
                    card.classList.add('col-md-4');
                    // Create the card body
                    const cardBody = document.createElement('div');
                    cardBody.classList.add('card');
                    card.appendChild(cardBody);
                    // Create the card title
                    const cardTitle = document.createElement('h5');
                    cardTitle.classList.add('card-title');
                    const title = wordCloudData.file_name.replace('wordcloud_', '').replace('.png', '');
                    cardTitle.textContent = `${title} Sentiment`; // Add "Sentiment" to the extracted sentiment
                    cardBody.appendChild(cardTitle);
                    // Create the image element
                    const image = new Image();
                    image.src = wordCloudData.file_name; // Set the path to the word cloud file
                    image.style.maxWidth = '100%'; // Limit the image width to fit within the card
                    cardBody.appendChild(image);
                    // Append the card to the row container
                    rowContainer.appendChild(card);
                });

                // Render time-series chart
                const timeSeriesChart = charts[0];
                Plotly.newPlot('time-series', timeSeriesChart.data, timeSeriesChart.layout);

                // Render distribution chart
                const distributionChart = charts[1];
                Plotly.newPlot('distribution', distributionChart.data, distributionChart.layout);

                // Render sentiment distribution chart
                const sentimentDistributionChart = charts[2];
                Plotly.newPlot('sentiment-distribution', sentimentDistributionChart.data, sentimentDistributionChart.layout);

                // Render bar charts
                const chartsContainer = document.getElementById('example-texts');
                const columnWidth = 12; // Set the desired column width

                for (let i = 3; i < charts.length - 1; i++) {
                    const barChart = charts[i];
                    const divId = 'bar-chart-' + (i - 3);

                    // Create a column container
                    const column = document.createElement('div');
                    column.classList.add('col-md-' + columnWidth); // Set the column width class
                    column.style.marginBottom = '20px'; // Add some bottom margin between columns

                    // Create the chart container
                    const chartContainer = document.createElement('div');
                    chartContainer.setAttribute('id', divId);
                    column.appendChild(chartContainer);

                    // Append the column to the charts container
                    chartsContainer.appendChild(column);

                    // Render the chart
                    Plotly.newPlot(divId, barChart.data, barChart.layout);
                }
            });
    });
</script>
