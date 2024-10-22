<?php
/**
 * @author         Pierre-Henry Soria <hello@ph7cms.com>
 * @copyright      (c) 2018, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / SMS Verifier / Controller
 */

namespace PH7;

class MainController extends Controller
{
    public function send()
    {
        $this->view->page_title = $this->view->h1_title = t('Verify your Phone Number');

        $this->output();
    }

    public function verification()
    {
        $this->view->page_title = $this->view->h1_title = t('Phone Number Verification');

        $this->output();
    }
}
