<?php

namespace Ricardoboss\PhpunitEnumKeywordParseError\Test;

use PHPUnit\Framework\TestCase;
use Ricardoboss\PhpunitEnumKeywordParseError\ResponseCode;

/**
 * @covers \Ricardoboss\PhpunitEnumKeywordParseError\ResponseCode
 */
class ResponseCodeTest extends TestCase {
	public function testContinueMember(): void
	{
		$code = ResponseCode::Continue;

		self::assertEquals(100, $code->value);
	}
}
