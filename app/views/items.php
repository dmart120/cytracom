<html>
    <body>
        <h1><?php echo $title; ?></h1>

        <?php

        	foreach($items as $item)
        	{
        		echo '<p>itemTypeId: '.$item->itemTypeId.', itemNumber: '.$item->itemNumber.', title: '.$item->title.', description: '.$item->description.', price: '.$item->price.', showOnProposal: '.$item->showOnProposal.', isRecurring: '.$item->isRecurring.', glCodeId: '.$item->glCodeId.', sortIndex: '.$item->sortIndex.', includedMinutes: '.$item->includedMinutes.', transTypeCode: '.$item->transTypeCode.'</p>';
        	}

        ?>

    </body>
</html>