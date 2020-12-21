<?php

namespace App\Observers;

use App\Models\Gift;

class GiftObserver
{

    /**
     * Handle the Gift "deleting" event.
     *
     * @param  \App\Models\Gift  $gift
     * @return void
     */
    public function deleted(Gift $gift)
    {
        $gift->gifts()->delete();

        $gift->delete();
    }

}
