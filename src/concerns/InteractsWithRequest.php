<?php

namespace cwkj\api\concerns;

use cwkj\api\request\DefaultRequests;
use cwkj\api\request\douyin\DouyinRequests;

/**
 * @method DouyinRequests douyin()
 */
trait InteractsWithRequest {

    use DefaultRequests;
}
