<?php

namespace LaravelWebauthn\Facades;

use Illuminate\Support\Facades\Facade;
use Webauthn\PublicKeyCredentialRequestOptions;
use Webauthn\PublicKeyCredentialCreationOptions;

/**
 * @method static PublicKeyCredentialCreationOptions getRegisterData(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static \LaravelWebauthn\Models\WebauthnKey doRegister(\Illuminate\Contracts\Auth\Authenticatable $user, PublicKeyCredentialCreationOptions $publicKey, string $data, string $keyName)
 * @method static PublicKeyCredentialRequestOptions getAuthenticateData(\Illuminate\Contracts\Auth\Authenticatable $user)
 * @method static bool doAuthenticate(\Illuminate\Contracts\Auth\Authenticatable $user, PublicKeyCredentialRequestOptions $publicKey, string $data)
 * @method static void forceAuthenticate()
 * @method static bool check()
 * @method static bool enabled(\Illuminate\Contracts\Auth\Authenticatable $user)
 *
 * @see \LaravelWebauthn\Webauthn
 */
class Webauthn extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \LaravelWebauthn\Services\Webauthn::class;
    }
}
