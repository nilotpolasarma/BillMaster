public function testBasicExample1()
{
    $this->visit('/')
         ->click('Bills')
         ->seePageIs('/bills');
}
public function testBasicExample2()
{
    $this->visit('/')
         ->click('MeterReadings')
         ->seePageIs('/readings');
}
public function testBasicExample2()
{
    $this->visit('/')
         ->click('Payments')
         ->seePageIs('/payments');
}
public function testBasicExample2()
{
    $this->visit('/')
         ->click('System Settings')
         ->seePageIs('/settings');
}
