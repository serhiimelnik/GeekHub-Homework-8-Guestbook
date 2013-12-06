<?php

namespace Melnik\GuestbookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Melnik\GuestbookBundle\Entity\Entry;

class LoadEntry implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $Entry = new Entry();
        $Entry->setName('Devil');
        $Entry->setEmail('devil@mail.ru');
        $Entry->setText('In physics, power (symbol: P) is defined as the amount of energy consumed per unit time.
        In the MKS system, the unit of power is the joule per second (J/s), known as the watt (in honor of James
        Watt, the eighteenth-century developer of the steam engine). For example, the rate at which a light bulb
        converts electrical energy into heat and light is measured in watts—the more wattage, the more power, or
        equivalently the more electrical energy is used per unit time.');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('speed');
        $Entry->setEmail('speed@mail.ru');
        $Entry->setText('In everyday use and in kinematics, the speed of an object is the magnitude of its velocity
        (the rate of change of its position); it is thus a scalar quantity.[1] The average speed of an object in an
        interval of time is the distance travelled by the object divided by the duration of the interval;[2] the
        instantaneous speed is the limit of the average speed as the duration of the time interval approaches zero.');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('brake');
        $Entry->setEmail('brake@mail.ru');
        $Entry->setText('Pumping brakes are often used where a pump is already part of the machinery. For example,
        an internal-combustion piston motor can have the fuel supply stopped, and then internal pumping losses of
        the engine create some braking. Some engines use a valve override called a Jake brake to greatly increase
        pumping losses. Pumping brakes can dump energy as heat, or can be regenerative brakes that recharge a
        pressure reservoir called a hydraulic accumulator.');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('Drift');
        $Entry->setEmail('Drift@mail.ru');
        $Entry->setText('Drifting is a driving technique where the driver intentionally or unintentionally oversteers,
        causing loss of traction in the rear wheels or all tires, while maintaining control from entry to exit of
        a corner. A car is drifting when the rear slip angle is greater than the front slip angle, to such an
        extent that often the front wheels are pointing in the opposite direction to the turn (e.g. car is turning
        left, wheels are pointed right or vice versa).');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('Drag');
        $Entry->setEmail('Drag@mail.ru');
        $Entry->setText('Drag racing is a competition in which specially prepared automobiles or motorcycles compete,
        usually two at a time, to be first to cross a set finish line. The race follows a straight course from
        a standing start over a measured distance, most commonly ¼ mile (1,320 ft (402 m)), with a shorter 1,000 ft (305 m)
        for some Top Fuel dragsters and funny cars, while 660 ft (201 m) (1/8 mi) is also popular in some circles.
        Electronic timing and speed sensing systems have been used to record race results since the 1960s.
        The faster vehicles need a parachute to slow down, an innovation credited (indirectly) to cartoonist Tom Medley.');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('Rally');
        $Entry->setEmail('Rally@ukr.net');
        $Entry->setText('Rallying, also known as rally racing, is a form of auto racing that takes place on public or
        private roads with modified production or specially built road-legal cars. This motorsport is distinguished by
        running not on a circuit, but instead in a point-to-point format in which participants and their co-drivers
        drive between set control points (special stages), leaving at regular intervals from one or more start points.
        Rallies may be won by pure speed within the stages or alternatively by driving to a predetermined ideal
        journey time within the stages.');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('Formula');
        $Entry->setEmail('Formula@mail.ru');
        $Entry->setText('Formula One, also known as Formula 1 or F1 and referred to officially as the FIA Formula
        One World Championship,[2] is the highest class of single-seater auto racing sanctioned by the Fédération
        Internationale de lAutomobile (FIA). The "formula", designated in the name, refers to a set of rules with
        which all participants cars must comply.[3] The F1 season consists of a series of races, known as Grands
        Prix (from French, originally meaning great prizes), held throughout the world on purpose-built circuits
        and public roads.');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('DTM');
        $Entry->setEmail('DTM@mail.ru');
        $Entry->setText('The Deutsche Tourenwagen Masters (DTM, German Touring Car Masters) is a Silhouette
        racing car series based in Germany, but also with rounds elsewhere in Europe.
        From 2000 onwards, this new DTM continued the former Deutsche Tourenwagen Meisterschaft
        (German Touring Car Championship) and ITC (International Touring Car Championship) which had been
        discontinued after 1996 due to high costs.');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('racing');
        $Entry->setEmail('racing@mail.ru');
        $Entry->setText('As modern motor racing is centered on modern technology with a lots of corporate
        sponsors and politics involved, historical racing tends to be the opposite. Because it is based on
        a particular era it is more hobbyist oriented, reducing corporate sponsorship and politics. Events are
        regulated to only allow cars of a certain era to participate. The only modern equipment used is related
        to safety and timing. A historical event can be of a number of different motorsport disciplines.');
        $manager->persist($Entry);

        $Entry = new Entry();
        $Entry->setName('Automobile');
        $Entry->setEmail('automobile@mail.ru');
        $Entry->setText('An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting
        passengers, which also carries its own engine or motor. Most definitions of the term specify that
        automobiles are designed to run primarily on roads, to have seating for one to eight people, to typically
        have four wheels, and to be constructed principally for the transport of people rather than goods.');
        $manager->persist($Entry);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}