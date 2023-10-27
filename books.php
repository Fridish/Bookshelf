<?php //this is the file where i keep the form. Right now, it also contains the loop that controls the filters and searches. Will update this and split it later. 
?>
<div>
    <h1>Library books</h1>
    <div class="filterMenu">
        <div>
            <h3> Sort books by: </h3>
            <form method="get">
                <input type="radio" id="Author" name="filter" value="author" class="test" />
                <label for="author">Author</label>
                <input type="radio" id="book" name="filter" value="title" class="test" />
                <label for="title">Book Title</label>
                <input type="radio" id="year" name="filter" value="year" class="test" />
                <label for="year">Year Released</label>
                <input type="submit" value="Sort" />
                <label for="test"></label>
            </form>
            <form>
                <input type="text" name="search" />
                <input type="submit" for="search" value="search" />
                <label for="submit"></label>
            </form>
            <br>
        </div>
    </div>
    <div class=bookContainer>
        <?php
        if (isset($_GET["filter"])) {
            if ($_GET["filter"] === "author") {
                foreach ($author as $key => $book) { ?>
                    <div class="imageAndInfo">
                        <img class="bookCover" src="<?php echo $book["image"] ?>" alt="book cover for <?php echo $book["title"] ?>">
                        <div class="bookTitle" <?php echo $book["title"]; ?>> <?php echo "" . $book["author"] . " - " . $book["title"] . "(" . $book["releaseYear"] . ")"; ?>
                        </div>
                    </div>
                <?php
                }
            } elseif ($_GET["filter"] === "year") {
                foreach ($year as $key => $book) {
                ?>
                    <div class="imageAndInfo">
                        <img class="bookCover" src="<?php echo $book["image"] ?>" alt="book cover for <?php echo $book["title"] ?>">
                        <div class="bookTitle" <?php echo $book["title"]; ?>> <?php echo "" . $book["author"] . " - " . $book["title"] . "(" . $book["releaseYear"] . ")"; ?>
                        </div>
                    </div>
                <?php
                }
            } elseif ($_GET["filter"] === "title") {
                foreach ($title as $key => $book) {
                ?>
                    <div class="imageAndInfo">
                        <img class="bookCover" src="<?php echo $book["image"] ?>" alt="book cover for <?php echo $book["title"] ?>">
                        <div class="bookTitle" <?php echo $book["title"]; ?>> <?php echo "" . $book["author"] . " - " . $book["title"] . "(" . $book["releaseYear"] . ")"; ?>
                        </div>
                    </div>
                <?php
                }
            }
        }
        if (isset($_GET["search"])) {
            foreach ($books as $key => $book) {
                $searchBooks = implode($book);
                if (strpos(strtolower($searchBooks), strtolower($_GET["search"])) !== false) {
                ?> <div class="imageAndInfo">
                        <img class="bookCover" src="<?php echo $book["image"] ?>" alt="book cover for <?php echo $book["title"] ?>">
                        <div class="bookTitle" <?php echo $book["title"]; ?>> <?php echo "" . $book["author"] . " - " . $book["title"] . " (" . $book["releaseYear"] . ")"; ?>
                        </div>
                    </div>
                <?php
                }
            }
        }
        if (isset($_GET["search"]) != true && (isset($_GET["filter"]) != true)) {
            foreach ($books as $key => $book) {
                ?> <div class="imageAndInfo">
                    <img class="bookCover" src="<?php echo $book["image"] ?>" alt="book cover for <?php echo $book["title"] ?>">
                    <div class="bookTitle" <?php echo $book["title"]; ?>> <?php echo "" . $book["author"] . " - " . $book["title"] . " (" . $book["releaseYear"] . ")"; ?>
                    </div>
                </div>
        <?php
            }
        }

        ?>
    </div>
</div>