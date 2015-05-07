<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('RoleTableSeeder');
		$this->call('UserTableSeeder');
        $this->call('StatusTableSeeder');
        $this->call('ClaimTypeTableSeeder');
        $this->call('InsuranceTypeTableSeeder');
        $this->call('InsurerTableSeeder');
        $this->call('SolicitorTableSeeder');
        $this->call('ClientTypeTableSeeder');
        $this->call('ClientTableSeeder');
        $this->call('VehicleTypeTableSeeder');
        $this->call('VehicleTableSeeder');
        $this->call('ClaimTableSeeder');
        $this->call('TaskTableSeeder');

	}

}

class UserTableSeeder extends Seeder
{

    /**
     * seed users table
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            ['name' => 'Nahin Miah', 'slug' => 'nahin14', 'email' => 'nahinmiah93@gmail.com', 'password' => Hash::make('password'), 'roleID' => '1'],
            ['name' => 'Flavio Gomes', 'slug' => 'flavio94', 'email' => 'gomesf94@gmail.com', 'password' => Hash::make('password'), 'roleID' => '2'],
            ['name' => 'Lawrence Kit Chan', 'slug' => 'lawchan', 'email' => 'lawrencekitchan@gmail.com', 'password' => Hash::make('password'), 'roleID' => '2'],
            ['name' => 'Santonio V. Afonso', 'slug' => 'santonio', 'email' => 'afonso.s.valiton@gmail.com', 'password' => Hash::make('password'), 'roleID' => '2'],
            ['name' => 'Muhammad Hussain', 'slug' => 'shahel', 'email' => 'shahelhussain@hotmail.com', 'password' => Hash::make('password'), 'roleID' => '2'],

        ];

        DB::table('users')->insert($users);

    }

}

class StatusTableSeeder extends Seeder
{
    /**
     * seed status table
     */
    public function run()
    {
        DB::table('statuses')->delete();

        $statuses = [
            ['statusName' => 'New'],
            ['statusName' => 'Pending'],
            ['statusName' => 'Completed'],
            ['statusName' => 'Cancelled'],
            ['statusName' => 'Void'],
        ];

        DB::table('statuses')->insert($statuses);
    }
}

class ClaimTypeTableSeeder extends Seeder
{
    /**
     * seed claim type table
     */
    public function run()
    {
        DB::table('claim_types')->delete();

        $claim_types = [
            ['claimTypeName' => 'Driver'],
            ['claimTypeName' => 'Passenger'],
            ['claimTypeName' => 'Cyclist'],
            ['claimTypeName' => 'Pedestrian'],
            ['claimTypeName' => 'Bus Passenger'],
            ['claimTypeName' => 'Taxi Passenger']
        ];

        DB::table('claim_types')->insert($claim_types);
    }
}

class InsuranceTypeTableSeeder extends Seeder
{
    /**
     * seed insurance type table
     */
    public function run()
    {
        DB::table('insurance_types')->delete();

        $insurance_types = [
            ['insuranceTypeName' => 'Third Party'],
            ['insuranceTypeName' => 'Fully Comprehensive'],
            ['insuranceTypeName' => 'None']
        ];

        DB::table('insurance_types')->insert($insurance_types);
    }
}

class InsurerTableSeeder extends Seeder
{
    /**
     * seed insurers
     */
    public function run()
    {
        DB::table('insurers')->delete();

        $insurers = [
            ['slug' => 'Churchill Insurance',
                'addressLine1' => 'The Wharf', 'addressLine2' => 'Neville Street',
                'city' => 'Leeds', 'Postcode' => 'LS1 4AZ',
                'Telephone' => '08456033599', 'email' => 'motorclaims@churchill.com'],
            ['slug' => 'Aviva',
                'addressLine1' => 'Aviva-Claims', 'addressLine2' => 'PO Box 520',
                'city' => 'Norwich', 'Postcode' => 'NR1 3WG',
                'Telephone' => '08000151142', 'email' => 'helpdesk@aviva.co.uk'],
        ];

        DB::table('insurers')->insert($insurers);
    }
}

class SolicitorTableSeeder extends Seeder
{
    /**
     * seed solicitors table
     */
    public function run()
    {
        DB::table('solicitors')->delete();

        $solicitors = [
            ['slug' => 'Jessica Pearson', 'firmName' => 'Pearson Specter Litt',
                'addressLine1' => '601', 'addressLine2' => 'Lexington New York',
                'city' => 'New York', 'Postcode' => 'NY1 2CT',
                'Telephone' => '08003333555', 'Mobile' => '', 'email' => 'pearsonj@psl.com'],
            ['slug' => 'Harvey Specter', 'firmName' => 'Pearson Specter Litt',
                'addressLine1' => '601', 'addressLine2' => 'Lexington New York',
                'city' => 'New York', 'Postcode' => 'NY1 2CT',
                'Telephone' => '08003333555', 'Mobile' => '', 'email' => 'specterh@psl.com'],
            ['slug' => 'Louis Litt', 'firmName' => 'Pearson Specter Litt',
                'addressLine1' => '601', 'addressLine2' => 'Lexington New York',
                'city' => 'New York', 'Postcode' => 'NY1 2CT',
                'Telephone' => '08003333555', 'Mobile' => '', 'email' => 'littl@psl.com'],
            ['slug' => 'Mike Ross', 'firmName' => 'Pearson Specter Litt',
                'addressLine1' => '601', 'addressLine2' => 'Lexington New York',
                'city' => 'New York', 'Postcode' => 'NY1 2CT',
                'Telephone' => '08003333555', 'Mobile' => '', 'email' => 'rossm@psl.com']
        ];

        DB::table('solicitors')->insert($solicitors);
    }
}

class ClientTypeTableSeeder extends Seeder
{
    /**
     * seed client type table
     */
    public function run()
    {
        DB::table('client_types')->delete();

        $client_types = [
            ['clientTypeName' => 'Claimant'],
            ['clientTypeName' => 'Defendant']
        ];

        DB::table('client_types')->insert($client_types);
    }
}

class ClientTableSeeder extends Seeder
{
    /**
     * seed client table
     */
    public function run()
    {
        DB::table('clients')->delete();

        $clients = [
            ['slug' => 'Perry Park', 'dob' => '1986-02-12', 'addressLine1' => '23', 'addressLine2' => 'Ravensdale Avenue',
                'city' => 'London', 'postcode' => 'N12 9SS', 'email' => 'park86@example.com', 'telephone' => '02034536769',
                'mobile' => '07455989420', 'licenseNo' => 'PARK485723430411',
                'insuranceTypeID' => '1', 'insurerID' => '1'],
            ['slug' => 'Moe Hassan', 'dob' => '1990-06-03', 'addressLine1' => '77', 'addressLine2' => 'Maroon Street',
                'city' => 'London', 'postcode' => 'E14 7RG', 'email' => 'mhassan90@example.com', 'telephone' => '02077090591',
                'mobile' => '07455989420', 'licenseNo' => 'HASSAN5723430411',
                'insuranceTypeID' => '2', 'insurerID' => '2'],
        ];

        DB::table('clients')->insert($clients);
    }
}

class VehicleTypeTableSeeder extends Seeder
{
    /**
     * seed vehicle type table
     */
    public function run()
    {
        DB::table('vehicle_types')->delete();

        $vehicle_types = [
            ['vehicleTypeName' => 'Car'],
            ['vehicleTypeName' => 'Van'],
            ['vehicleTypeName' => 'Truck'],
            ['vehicleTypeName' => 'Motorcycle'],
            ['vehicleTypeName' => 'Bicycle'],
        ];

        DB::table('vehicle_types')->insert($vehicle_types);
    }
}

class VehicleTableSeeder extends Seeder
{
    /**
     * seed vehicle table
     */
    public function run()
    {
        DB::table('vehicles')->delete();

        $vehicles = [
            ['slug'=> 'BD32ADB', 'clientID' => '1', 'vehicleTypeID' => '1']
        ];

        DB::table('vehicles')->insert($vehicles);
    }
}

class ClaimTableSeeder extends Seeder
{
    /**
     * seed claim table
     */
    public function run()
    {
        DB::table('claims')->delete();

        $claims = [
            ['slug' => 'Claim 1', 'claimTypeID' => '1', 'claimDate' => '2015-01-01', 'statusID' => '3',
                'claimInfo' => 'Client would  like to claim for...', 'notes' => '...', 'clientID' => '1',
                'clientTypeID' => '1', 'userID' => '1', 'solicitorID' => '4']
        ];

        DB::table('claims')->insert($claims);
    }
}

class TaskTableSeeder extends Seeder
{
    /**
     * seed task table
     */
    public function run()
    {
        DB::table('tasks')->delete();

        $tasks = [
            ['slug' => 'Task 1', 'claimID' =>'1', 'taskInfo' => 'Follow up with Dave at Churchill regarding...', 'statusID' => '3',
                'taskSetDate' => '2015-01-01', 'taskDeadlineDate' => '2015-01-02', 'notes' => '...', 'userID' => '2'],
            ['slug' => 'Task 2', 'claimID' =>'1', 'taskInfo' => 'Email client, Tomas Hall regarding...', 'statusID' => '4',
                'taskSetDate' => '2015-01-01', 'taskDeadlineDate' => '2015-01-02', 'notes' => '...', 'userID' => '2'],
            ['slug' => 'Task 3', 'claimID' =>'1', 'taskInfo' => 'Call...', 'statusID' => '3', 'taskSetDate' => '2015-01-01',
                'taskDeadlineDate' => '2015-01-05', 'notes' => '...', 'userID' => '2'],
            ['slug' => 'Task 4', 'claimID' =>'1', 'taskInfo' => 'Add Insurer details', 'statusID' => '4', 'taskSetDate' => '2015-01-01',
                'taskDeadlineDate' => '2015-01-07', 'notes' => '...', 'userID' => '3'],
            ['slug' => 'Task 5', 'claimID' =>'1', 'taskInfo' => 'Add client car details', 'statusID' => '2',
                'taskSetDate' => '2015-01-01', 'taskDeadlineDate' => '2015-01-12', 'notes' => '...', 'userID' => '2'],
            ['slug' => 'Task 6', 'claimID' =>'1', 'taskInfo' => 'Add evidence to claim', 'statusID' => '1',
                'taskSetDate' => '2015-01-01', 'taskDeadlineDate' => '2015-01-12', 'notes' => '...', 'userID' => '4'],
        ];

        DB::table('tasks')->insert($tasks);
    }
}

class RoleTableSeeder extends Seeder
{
    /**
     * seed role table
     */
    public function run()
    {
        DB::table('roles')->delete();

        $roles = [
            ['slug' => 'Admin'],
            ['slug' => 'Staff']
        ];

        DB::table('roles')->insert($roles);
    }
}
