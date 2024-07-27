<form action="addCar.server.php" method="post">
    <div style="margin: 5px;">
        <div>
            <label for="Manufacturer_input">Manufacturer:</label>
        </div>
        <div>
            <input id="Manufacturer_input" name="Manufacturer" type="text" required />
        </div>
        <div>
            <label for="Model_input">Model:</label>
        </div>
        <div>
            <input id="Model_input" name="Model" type="text" required />
        </div>
        <div>
            <label for="Year_input">Year:</label>
        </div>
        <div>
            <input id="Year_input" name="Year" type="number" min="1900" max="2024" step="1" required />
        </div>
        <div>
            <label for="Price_input">Price:</label>
        </div>
        <div>
            <input id="Price_input" name="Price" type="number" required />
        </div>
    </div>
    <div style="margin: 5px;">
        <input style="margin-top: 5px;" type="submit" name="Send" value="Send" />
    </div>
</form>