# JobTitleGenerator
Quick script to randomly generate job titles

While talking with a friend we got onto a short discussion about creative job titles.  I made a joke about a random job title generator and then thought that it might be fun to create one.  This is a quick and dirty PHP script that I created with less than 15 minutes of work.  It can offer a peek at my current coding practices to anyone who is interested.  How does it work?

Job titles are generated with four parts:
`[Prefix] [Major] of [Minor Prefix] [Minor]`

The *Major* and *Minor* parts of of the job title will always be included.  The two prefixes may not always be generated.  Each part of the title is stored within the PHP script as arrays and a random number is generated to select the array element for the job title part.  This initial version of the script includes six elements for each job title part.

More information will soon be available on [my personal website](http://www.christian-mcarthur.com).
