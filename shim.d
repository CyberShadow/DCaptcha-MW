// PHP-D shiw for DCaptcha.
// Written in the D programming language.

module shim;

import std.algorithm;
import std.array;
import std.stdio;
import std.string;

import ae.utils.json;
import ae.utils.xmllite;

import dcaptcha.dcaptcha;

struct JsonChallenge
{
	string question; /// html
	string[] answer;
}

void main()
{
	CaptchaSpec spec;
	spec.allowEasy = false;
	spec.allowHard = true;
	spec.allowStatic = false;

	auto challenge = getCaptcha(spec);
	JsonChallenge(
		challenge.question.encodeEntities() ~ "\n<pre>" ~ challenge.code.encodeEntities() ~ "</pre>",
		challenge.answers.map!toLower.array()
	).toJson().write();
}
