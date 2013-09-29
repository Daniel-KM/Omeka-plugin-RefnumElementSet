refNum Element Set (plugin for Omeka)
=====================================


Summary
-------

This plugin for [Omeka] creates a file element set for the refNum standard and
adds the metadata that can't be replaced by a Dublin Core element.

[refNum] is an xml format dedicated to digital and scanned images,
especially from books and manuscripts but not only. This standard has been
created by [Bibliothèque nationale de France], the French national library.

**Note**: refNum standard is not totally implemented: only items useful for
Omeka are added.

It can be used in conjunction with the [OCR Element Set] plugin, which manages
all texts of a document.


Installation
------------

Uncompress files and rename plugin folder "RefnumElementSet".

Then install it like any other Omeka plugin. The plugin has no configuration.


Warning
-------

Use it at your own risk.

It's always recommended to backup your files and database so you can roll back
if needed.


Troubleshooting
---------------

See online issues on [RefnumElementSet issues] page on GitHub.


License
-------

This plugin is published under the [CeCILL v2.1] licence, compatible with
[GNU/GPL] and approved by [FSF] and [OSI].

In consideration of access to the source code and the rights to copy, modify and
redistribute granted by the license, users are provided only with a limited
warranty and the software's author, the holder of the economic rights, and the
successive licensors only have limited liability.

In this respect, the risks associated with loading, using, modifying and/or
developing or reproducing the software by the user are brought to the user's
attention, given its Free Software status, which may make it complicated to use,
with the result that its use is reserved for developers and experienced
professionals having in-depth computer knowledge. Users are therefore encouraged
to load and test the suitability of the software as regards their requirements
in conditions enabling the security of their systems and/or data to be ensured
and, more generally, to use and operate it in the same conditions of security.
This Agreement may be freely reproduced and published, provided it is not
altered, and that no provisions are either added or removed herefrom.


Contact
-------

Current maintainers:

* Daniel Berthereau (see [Daniel-KM])

First version of this plugin has been built for [École des Ponts ParisTech]
and has been upgraded for [Lektum] and [Mines ParisTech].


Copyright
---------

* Copyright Daniel Berthereau, 2012-2013


[Omeka]: https://omeka.org "Omeka.org"
[refNum]: http://bibnum.bnf.fr/refNum
[Bibliothèque nationale de France]: http://www.bnf.fr
[OCR Element Set]: https://github.com/Daniel-KM/OcrElementSet "GitHub OCR Element Set"
[RefnumElementSet issues]: https://github.com/Daniel-KM/RefnumElementSet/Issues "GitHub refNum Element Set"
[CeCILL v2.1]: http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html "CeCILL v2.1"
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html "GNU/GPL v3"
[FSF]: https://www.fsf.org
[OSI]: http://opensource.org
[Daniel-KM]: https://github.com/Daniel-KM "Daniel Berthereau"
[École des Ponts ParisTech]: http://bibliotheque.enpc.fr "École des Ponts ParisTech / ENPC"
[Lektum]: http://www.lektum.com
[Mines ParisTech]: http://bib.mines-paristech.fr "Mines ParisTech / ENSMP"
