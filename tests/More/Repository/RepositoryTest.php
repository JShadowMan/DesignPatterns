<?php
/**
 * RepositoryTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class RepositoryTest
 */
final class RepositoryTest extends PHPUnit\Framework\TestCase {
    /**
     * test repository pattern
     */
    final public function testRepository(): void {
        $repo = new \DesignPatterns\More\Repository\UserRepository(
            new \DesignPatterns\More\Repository\MemoryStorage());
        $user_1 = new \DesignPatterns\More\Repository\UserObject('Jack', 1);
        $user_2 = new \DesignPatterns\More\Repository\UserObject('John', 2);

        $repo->save_user($user_1);
        $repo->save_user($user_2);

        $this->assertEquals($user_1, $repo->get_user_by_name('Jack'));
        $this->assertEquals($user_2, $repo->get_user_by_name('John'));
    }
}
