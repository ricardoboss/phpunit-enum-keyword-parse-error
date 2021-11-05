<?php

namespace Ricardoboss\PhpunitEnumKeywordParseError;

enum ResponseCode: int {
	case Continue = 100;
	case Ok = 200;
	case NotFound = 404;
}
