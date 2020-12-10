<link rel="stylesheet" href="css/style.css">

<section class="product-section">
    <h2>Tilføj nyt produkt</h2>
    <form action="includes/addproduct.php" method="get" class="product-form">
        <div>
            <label for="productname">Produkt navn</label>
            <input type="text" id="productname" name="productname" placeholder="Produkt navn">
        </div>
        <div>
            <label for="productdesc">Produkt beskrivelse</label>
            <textarea name="productdesc" id="productdesc" cols="100" rows="10" placeholder="Produkt beskrivelse"></textarea>
        </div>
        <div>
            <label for="productprice">Produkt pris</label>
            <input type="number" id="productprice" name="productprice" step="0.01">
        </div>
        <div>
            <label for="productonsale">På tilbude</label>
            <input type="hidden" id="productonsale" name="productonsale" value="0">
            <input type="checkbox" id="productonsale" name="productonsale" value="1">
        </div>
        <div>
            <label for="productaddedby">Tilført af</label>
            <input type="text" id="productaddedby" name="productaddedby">
        </div>
        <div>
            <label for="productimgpath">Billede</label>
            <input type="text" id="productimgpath" name="productimgpath">
        </div>
        <div>
            <label for="productimgalt">Alternative text for billede</label>
            <input type="text" id="productimgalt" name="productimgalt">
        </div>
        <input type="submit" value="Tilføj">
    </form>
</section>