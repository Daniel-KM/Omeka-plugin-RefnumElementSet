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
Omeka are added. Furthermore, since release 2.2, it adds new fields to refNum
too in order to allow a correct display with [BookReader] ("Position de la page",
"Nombre vues" and "Orientation").

This plugin can be used in conjunction with the [OCR Element Set] plugin, that
allows to save OCR informations and texts about each page described by refNum.


Installation
------------

Uncompress files and rename plugin folder "RefnumElementSet".

Then install it like any other Omeka plugin. The plugin has no configuration.


Upgrade
-------

The upgrade from a release prior than 2.1 cannot be done automatically, because
this release separates refNum metadata and OCR ones into two element sets.

It can be done manually with a sql tool like [Adminer] or [phpMyAdmin]:
- Backup your database in case of a problem.
- Install [OCR Element Set].
- Remove the newly created elements of the set OCR in table 'Elements'.
- Change each refNum elements that are managed now by the OCR element set:
update the element set id with the OCR element set id, the name, the order and
the description with values from the 'elements.php' file.

The upgrade to 2.2 removes the 'Nom de page' field, because it is a duplicate
of the Dublin Core Title.

If needed, the import tools and the theme should be updated too.


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

* Copyright Daniel Berthereau, 2012-2015


[Omeka]: https://omeka.org
[refNum]: http://bibnum.bnf.fr/refNum
[Bibliothèque nationale de France]: http://www.bnf.fr
[RefnumElementSet issues]: https://github.com/Daniel-KM/RefnumElementSet/issues
[adminer]: http://www.adminer.org
[phpMyAdmin]: http://www.phpmyadmin.net
[OCR Element Set]: https://github.com/Daniel-KM/OcrElementSet
[BookReader]: https://github.com/Daniel-KM/BookReader
[CeCILL v2.1]: https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html "GNU/GPL v3"
[FSF]: https://www.fsf.org
[OSI]: http://opensource.org
[Daniel-KM]: https://github.com/Daniel-KM "Daniel Berthereau"
[École des Ponts ParisTech]: http://bibliotheque.enpc.fr
[Lektum]: http://www.lektum.com
[Mines ParisTech]: http://bib.mines-paristech.fr
