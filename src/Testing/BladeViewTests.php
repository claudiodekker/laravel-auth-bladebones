<?php

namespace ClaudioDekker\LaravelAuthBladebones\Testing;

use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\AccountRecoveryChallengeViewTests;
use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\AccountRecoveryRequestViewTests;
use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\CredentialsOverviewViewTests;
use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\LoginViewTests;
use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\MultiFactorChallengeViewTests;
use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\RegisterPublicKeyCredentialViewTests;
use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\RegisterTotpCredentialViewTests;
use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\RegisterViewTests;
use ClaudioDekker\LaravelAuthBladebones\Testing\Partials\SudoModeChallengeViewTests;

trait BladeViewTests
{
    use RegisterViewTests;
    use LoginViewTests;
    use AccountRecoveryRequestViewTests;

    // Challenges
    use AccountRecoveryChallengeViewTests;
    use MultiFactorChallengeViewTests;
    use SudoModeChallengeViewTests;

    // Settings
    use CredentialsOverviewViewTests;
    use RegisterPublicKeyCredentialViewTests;
    use RegisterTotpCredentialViewTests;
}
