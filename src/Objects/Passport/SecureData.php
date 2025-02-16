<?php

namespace Telegram\Bot\Objects\Passport;

use Telegram\Bot\Objects\BaseObject;

/**
 * @property SecureValue|null $personalDetails            (Optional). Credentials for encrypted personal details
 * @property SecureValue|null $passport                   (Optional). Credentials for encrypted passport
 * @property SecureValue|null $internalPassport           (Optional). Credentials for encrypted internal passport
 * @property SecureValue|null $driverLicense              (Optional). Credentials for encrypted driver license
 * @property SecureValue|null $identityCard               (Optional). Credentials for encrypted ID card
 * @property SecureValue|null $address                    (Optional). Credentials for encrypted residential address
 * @property SecureValue|null $utilityBill                (Optional). Credentials for encrypted utility bill
 * @property SecureValue|null $bankStatement              (Optional). Credentials for encrypted bank statement
 * @property SecureValue|null $rentalAgreement            (Optional). Credentials for encrypted rental agreement
 * @property SecureValue|null $passportRegistration       (Optional). Credentials for encrypted registration from internal passport
 * @property SecureValue|null $temporaryRegistration      (Optional). Credentials for encrypted temporary registration
 *
 * @link https://core.telegram.org/bots/api#securedata
 */
class SecureData extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [
            'personal_details'       => SecureValue::class,
            'passport'               => SecureValue::class,
            'internal_passport'      => SecureValue::class,
            'driver_license'         => SecureValue::class,
            'identity_card'          => SecureValue::class,
            'address'                => SecureValue::class,
            'utility_bill'           => SecureValue::class,
            'bank_statement'         => SecureValue::class,
            'rental_agreement'       => SecureValue::class,
            'passport_registration'  => SecureValue::class,
            'temporary_registration' => SecureValue::class,
        ];
    }
}
