<head>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>jQuery Filter and Selecter</title>
</head>
<body>
    <!-- main container  -->
    <div class="container">
        <h1>Filters And Selectors</h1>
        <!-- header  -->
        <header>
            <div class="header__box">
                <!-- header select  -->
                <div class="header__select">
                    <select name="OS" id="filter_os" onchange="filtering()">
                        <option value="">-OS-</option>
                        <option value="IOS">IOS</option>
                        <option value="Android">Android</option>
                        <option value="Windows">Windows</option>
                    </select>
                    <select name="Brand" id="filter_brand" onchange="filtering()">
                        <option value="">-Brand-</option>
                        <option value="Asus">Asus</option>
                        <option value="Apple">Apple</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Motorola">Motorola</option>
                        <option value="Microsoft">Microsoft</option>
                    </select>
                </div>
                <!-- headre table  -->
                <div class="header__table">
                    <table>
                        <caption>Table</caption>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Operating System</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody id="table_body"></tbody>
                    </table>
                </div>
            </div>
        </header>
    </div>
</body>
<script src="./JS/products.js"></script>
</html>