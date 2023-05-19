<?php

it('test trims', function () {
    $example = 'But don’t humans also have genuinely original ideas?” Come on, read a fantasy book. It’s either a Tolkien clone, or it’s A Song Of Ice And Fire. Tolkien was a professor of Anglo-Saxon language and culture; no secret where he got his inspiration. A Song Of Ice And Fire is just War Of The Roses with dragons. Lannister and Stark are just Lancaster and York, the map of Westeros is just Britain (minus Scotland) with an upside down-Ireland stuck to the bottom of it – wake up, sheeple! Dullards blend Tolkien into a slurry and shape it into another Tolkien-clone. Tolkien-level artistic geniuses blend human experience, history, and the artistic corpus into a slurry and form it into an entirely new genre. Again, the difference is how finely you blend and what spices you add to the slurry.';

    $expected = 'dont human genuin origin ideas? Come on, read fantasi book. Tolkien clone, Song Ice Fire. Tolkien professor Anglo-saxon languag culture; secret got inspiration. Song Ice just War Rose dragons. Lannist Stark just Lancast York, map Westero just Britain (minus Scotland) upsid down-ireland stuck  wake up, sheeple! Dullard blend Tolkien slurri shape Tolkien-clone. Tolkien-level artist genius blend human experience, history, artist corpus slurri form entir new genre. Again, differ fine blend spice add slurry.';

    $trimmer = new SundanceSolutions\LarachainTrimText\LarachainTrimText();
    $results = $trimmer->trim($example);
    expect($results)->toBe($expected);
});


it('test stemmer', function () {
    $example = 'But don’t humans also have genuinely original ideas?” Come on, read a fantasy book. It’s either a Tolkien clone, or it’s A Song Of Ice And Fire. Tolkien was a professor of Anglo-Saxon language and culture; no secret where he got his inspiration. A Song Of Ice And Fire is just War Of The Roses with dragons. Lannister and Stark are just Lancaster and York, the map of Westeros is just Britain (minus Scotland) with an upside down-Ireland stuck to the bottom of it – wake up, sheeple! Dullards blend Tolkien into a slurry and shape it into another Tolkien-clone. Tolkien-level artistic geniuses blend human experience, history, and the artistic corpus into a slurry and form it into an entirely new genre. Again, the difference is how finely you blend and what spices you add to the slurry.';

    $expected = 'dont human genuin origin ideas? Come on, read fantasi book. Tolkien clone, Song Ice Fire. Tolkien professor Anglo-saxon languag culture; secret got inspiration. Song Ice just War Rose dragons. Lannist Stark just Lancast York, map Westero just Britain (minus Scotland) upsid down-ireland stuck  wake up, sheeple! Dullard blend Tolkien slurri shape Tolkien-clone. Tolkien-level artist genius blend human experience, history, artist corpus slurri form entir new genre. Again, differ fine blend spice add slurry.';

    $trimmer = new SundanceSolutions\LarachainTrimText\LarachainTrimText();
    $results = $trimmer->trim(
        $example,
        "en",
        false,
        true,
        true,
        true
    );;
    expect($results)->toBe($expected);
});
