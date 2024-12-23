Instructions

```
php artisan make:migration create_addresses_table

php artisan make:migration create_contacts_table

php artisan make:migration create_companies_table

php artisan make:migration create_interest_centers_table

php artisan make:migration create_contact_interest_center_table --create=contact_interest_center

php artisan make:migration create_company_contact_table

```

- With this pivot table, you can easily manage the "many-to-many" relationship between contacts and companies in your Laravel models:
  
```

public function companies()
{
    return $this->belongsToMany(Company::class, 'company_contact')
                ->withPivot([
                    'main_company',
                    'entry_date',
                    'exit_date',
                    'job_title',
                    'professional_email',
                    'professional_mobile_number',
                    'validity_status'
                ])
                ->withTimestamps();
}

public function contacts()
{
    return $this->belongsToMany(Contact::class, 'company_contact')
                ->withPivot([
                    'main_company',
                    'entry_date',
                    'exit_date',
                    'job_title',
                    'professional_email',
                    'professional_mobile_number',
                    'validity_status'
                ])
                ->withTimestamps();
}
```
