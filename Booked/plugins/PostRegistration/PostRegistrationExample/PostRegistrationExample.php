<?php
/**
Copyright 2012-2014 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

//require_once(dirname(__FILE__) . '/PreReservationExampleValidation.php');

class PostRegistrationExample extends PostRegistration
{
	/**
     * @var PreReservationFactory
     */
    private $factoryToDecorate ;
    
    public function __construct(PostRegistration $factoryToDecorateFoo)
    {
    	$this->factoryToDecorate = $factoryToDecorateFoo;
    	
    	//$this->activation = $factoryToDecorate->authentication;
    	
    //$userRepository = new UserRepository();
    	//$this->authentication = $this->factoryToDecorate-> $factoryToDecorate->$  :: -> $  HandleSelfRegistration($user, $page, $loginContext)  au  factoryToDecorate->
     //   $this->authentication = new WebAuthentication(self::LoadAuthentication());
    //	$this->activation = new AccountActivation($userRepository, $userRepository);
    }
    
    
    public function HandleSelfRegistration(User $user, IRegistrationPage $page, ILoginContext $loginContext)
    {
    	$this->factoryToDecorate->HandleSelfRegistration($user, $page, $loginContext);
    	Log::Debug('PostRegistrationExample - Do somthing !');
    	
    	
    }

   
}