<?php
// @link https://confluence.jetbrains.com/display/PhpStorm/PhpStorm+Advanced+Metadata
namespace PHPSTORM_META {

	expectedArguments(
		\App\Model\Entity\Article::get(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::getError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::getInvalidField(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::getOriginal(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::has(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::hasValue(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::isDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::isEmpty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::setDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\App\Model\Entity\Article::setError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\Article'),
	);

	expectedArguments(
		\Cake\Cache\Cache::add(),
		2,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::clear(),
		0,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::clearGroup(),
		1,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::decrement(),
		2,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::delete(),
		1,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::deleteMany(),
		1,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::increment(),
		2,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::read(),
		1,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::readMany(),
		1,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::remember(),
		2,
		argumentsSet('cacheEngines'),
	);

	expectedArguments(
		\Cake\Cache\Cache::write(),
		2,
		argumentsSet('cacheEngines'),
	);

	exitPoint(\Cake\Console\ConsoleIo::abort());

	override(
		\Cake\Console\ConsoleIo::helper(0),
		map([
			'Banner' => \Cake\Command\Helper\BannerHelper::class,
			'Progress' => \Cake\Command\Helper\ProgressHelper::class,
			'Table' => \Cake\Command\Helper\TableHelper::class,
		]),
	);

	expectedArguments(
		\Cake\Controller\ComponentRegistry::unload(),
		0,
		'CheckHttpCache',
		'Flash',
		'FormProtection',
	);

	override(
		\Cake\Controller\Controller::loadComponent(0),
		map([
			'CheckHttpCache' => \Cake\Controller\Component\CheckHttpCacheComponent::class,
			'Flash' => \Cake\Controller\Component\FlashComponent::class,
			'FormProtection' => \Cake\Controller\Component\FormProtectionComponent::class,
		]),
	);

	expectedArguments(
		\Cake\Core\Configure::check(),
		0,
		argumentsSet('configureKeys'),
	);

	expectedArguments(
		\Cake\Core\Configure::consume(),
		0,
		argumentsSet('configureKeys'),
	);

	expectedArguments(
		\Cake\Core\Configure::consumeOrFail(),
		0,
		argumentsSet('configureKeys'),
	);

	expectedArguments(
		\Cake\Core\Configure::delete(),
		0,
		argumentsSet('configureKeys'),
	);

	expectedArguments(
		\Cake\Core\Configure::read(),
		0,
		argumentsSet('configureKeys'),
	);

	expectedArguments(
		\Cake\Core\Configure::readOrFail(),
		0,
		argumentsSet('configureKeys'),
	);

	expectedArguments(
		\Cake\Core\Configure::write(),
		0,
		argumentsSet('configureKeys'),
	);

	override(
		\Cake\Core\PluginApplicationInterface::addPlugin(0),
		map([
			'Bake' => \Cake\Http\BaseApplication::class,
			'BootstrapUI' => \Cake\Http\BaseApplication::class,
			'Cake/TwigView' => \Cake\Http\BaseApplication::class,
			'DebugKit' => \Cake\Http\BaseApplication::class,
			'IdeHelper' => \Cake\Http\BaseApplication::class,
			'Migrations' => \Cake\Http\BaseApplication::class,
			'Templating' => \Cake\Http\BaseApplication::class,
		]),
	);

	override(
		\Cake\Database\TypeFactory::build(0),
		map([
			'biginteger' => \Cake\Database\Type\IntegerType::class,
			'binary' => \Cake\Database\Type\BinaryType::class,
			'binaryuuid' => \Cake\Database\Type\BinaryUuidType::class,
			'boolean' => \Cake\Database\Type\BoolType::class,
			'char' => \Cake\Database\Type\StringType::class,
			'date' => \Cake\Database\Type\DateType::class,
			'datetime' => \Cake\Database\Type\DateTimeType::class,
			'datetimefractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'decimal' => \Cake\Database\Type\DecimalType::class,
			'float' => \Cake\Database\Type\FloatType::class,
			'integer' => \Cake\Database\Type\IntegerType::class,
			'json' => \Cake\Database\Type\JsonType::class,
			'smallinteger' => \Cake\Database\Type\IntegerType::class,
			'string' => \Cake\Database\Type\StringType::class,
			'text' => \Cake\Database\Type\StringType::class,
			'time' => \Cake\Database\Type\TimeType::class,
			'timestamp' => \Cake\Database\Type\DateTimeType::class,
			'timestampfractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'timestamptimezone' => \Cake\Database\Type\DateTimeTimezoneType::class,
			'tinyinteger' => \Cake\Database\Type\IntegerType::class,
			'uuid' => \Cake\Database\Type\UuidType::class,
		]),
	);

	expectedArguments(
		\Cake\Database\TypeFactory::map(),
		0,
		'biginteger',
		'binary',
		'binaryuuid',
		'boolean',
		'char',
		'date',
		'datetime',
		'datetimefractional',
		'decimal',
		'float',
		'integer',
		'json',
		'smallinteger',
		'string',
		'text',
		'time',
		'timestamp',
		'timestampfractional',
		'timestamptimezone',
		'tinyinteger',
		'uuid',
	);

	expectedArguments(
		\Cake\Datasource\ConnectionManager::get(),
		0,
		'debug_kit',
		'default',
		'test',
	);

	override(
		\Cake\Datasource\ModelAwareTrait::fetchModel(0),
		map([
			'Articles' => \App\Model\Table\ArticlesTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
		]),
	);

	override(
		\Cake\Datasource\QueryInterface::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		]),
	);

	expectedArguments(
		\Cake\Http\ServerRequest::getParam(),
		0,
		'_ext',
		'_matchedRoute',
		'action',
		'controller',
		'pass',
		'plugin',
		'prefix',
	);

	override(
		\Cake\ORM\Association::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		]),
	);

	override(
		\Cake\ORM\Locator\LocatorAwareTrait::fetchTable(0),
		map([
			'Articles' => \App\Model\Table\ArticlesTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
		]),
	);

	override(
		\Cake\ORM\Locator\LocatorInterface::get(0),
		map([
			'Articles' => \App\Model\Table\ArticlesTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
		]),
	);

	expectedArguments(
		\Cake\ORM\Table::addBehavior(),
		0,
		'CounterCache',
		'DebugKit.Timed',
		'Timestamp',
		'Translate',
		'Tree',
	);

	override(
		\Cake\ORM\Table::belongToMany(0),
		map([
			'Articles' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsToMany::class,
		]),
	);

	override(
		\Cake\ORM\Table::belongsTo(0),
		map([
			'Articles' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsTo::class,
		]),
	);

	override(
		\Cake\ORM\Table::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		]),
	);

	override(
		\Cake\ORM\Table::hasMany(0),
		map([
			'Articles' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Panels' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasMany::class,
		]),
	);

	override(
		\Cake\ORM\Table::hasOne(0),
		map([
			'Articles' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Panels' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasOne::class,
		]),
	);

	expectedArguments(
		\Cake\ORM\Table::removeBehavior(),
		0,
		'CounterCache',
		'Timed',
		'Timestamp',
		'Translate',
		'Tree',
	);

	expectedArguments(
		\Cake\Routing\Router::pathUrl(),
		0,
		argumentsSet('routePaths'),
	);

	expectedArguments(
		\Cake\TestSuite\TestCase::addFixture(),
		0,
		'app.Articles',
		'core.Articles',
		'core.ArticlesMoreTranslations',
		'core.ArticlesTags',
		'core.ArticlesTagsBindingKeys',
		'core.ArticlesTranslations',
		'core.Attachments',
		'core.AuthUsers',
		'core.Authors',
		'core.AuthorsTags',
		'core.AuthorsTranslations',
		'core.BinaryUuidItems',
		'core.BinaryUuidItemsBinaryUuidTags',
		'core.BinaryUuidTags',
		'core.CakeSessions',
		'core.Categories',
		'core.ColumnSchemaAwareTypeValues',
		'core.Comments',
		'core.CommentsTranslations',
		'core.CompositeIncrements',
		'core.CompositeKeyArticles',
		'core.CompositeKeyArticlesTags',
		'core.CounterCacheCategories',
		'core.CounterCacheComments',
		'core.CounterCachePosts',
		'core.CounterCacheUserCategoryPosts',
		'core.CounterCacheUsers',
		'core.Datatypes',
		'core.DateKeys',
		'core.FeaturedTags',
		'core.Members',
		'core.MenuLinkTrees',
		'core.NullableAuthors',
		'core.NumberTrees',
		'core.NumberTreesArticles',
		'core.OrderedUuidItems',
		'core.Orders',
		'core.OtherArticles',
		'core.PolymorphicTagged',
		'core.Posts',
		'core.Products',
		'core.Profiles',
		'core.Sections',
		'core.SectionsMembers',
		'core.SectionsTranslations',
		'core.Sessions',
		'core.SiteArticles',
		'core.SiteArticlesTags',
		'core.SiteAuthors',
		'core.SiteTags',
		'core.SpecialTags',
		'core.SpecialTagsTranslations',
		'core.Tags',
		'core.TagsShadowTranslations',
		'core.TagsTranslations',
		'core.TestPluginComments',
		'core.Things',
		'core.Translates',
		'core.UniqueAuthors',
		'core.Users',
		'core.UuidItems',
		'plugin.Bake.Articles',
		'plugin.Bake.ArticlesTags',
		'plugin.Bake.Authors',
		'plugin.Bake.BakeArticles',
		'plugin.Bake.BakeArticlesBakeTags',
		'plugin.Bake.BakeCar',
		'plugin.Bake.BakeComments',
		'plugin.Bake.BakeTags',
		'plugin.Bake.BakeTemplateAuthors',
		'plugin.Bake.BakeTemplateProfiles',
		'plugin.Bake.BakeTemplateRoles',
		'plugin.Bake.BinaryTests',
		'plugin.Bake.Categories',
		'plugin.Bake.CategoriesProducts',
		'plugin.Bake.CategoryThreads',
		'plugin.Bake.Comments',
		'plugin.Bake.Datatypes',
		'plugin.Bake.HiddenFields',
		'plugin.Bake.Invitations',
		'plugin.Bake.NumberTrees',
		'plugin.Bake.OldProducts',
		'plugin.Bake.Posts',
		'plugin.Bake.ProductVersions',
		'plugin.Bake.Products',
		'plugin.Bake.Tags',
		'plugin.Bake.TodoItems',
		'plugin.Bake.TodoItemsTodoLabels',
		'plugin.Bake.TodoLabels',
		'plugin.Bake.TodoTasks',
		'plugin.Bake.UniqueFields',
		'plugin.Bake.Users',
		'plugin.DebugKit.Panels',
		'plugin.DebugKit.Requests',
		'plugin.IdeHelper.BarBars',
		'plugin.IdeHelper.Cars',
		'plugin.IdeHelper.Foos',
		'plugin.IdeHelper.Houses',
		'plugin.IdeHelper.Wheels',
		'plugin.IdeHelper.Windows',
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyArray(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyDate(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyDateTime(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyFile(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyFor(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyString(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyTime(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyArray(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyDate(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyDateTime(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyFile(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyString(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyTime(),
		2,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\Validation\Validator::requirePresence(),
		1,
		argumentsSet('validationWhen'),
	);

	expectedArguments(
		\Cake\View\Helper\FormHelper::control(),
		0,
		'content',
		'content_type',
		'created',
		'element',
		'id',
		'method',
		'modified',
		'panel',
		'request_id',
		'requested_at',
		'status',
		'status_code',
		'summary',
		'title',
		'url',
	);

	expectedArguments(
		\Cake\View\Helper\HtmlHelper::linkFromPath(),
		1,
		argumentsSet('routePaths'),
	);

	expectedArguments(
		\Cake\View\Helper\UrlHelper::buildFromPath(),
		0,
		argumentsSet('routePaths'),
	);

	override(
		\Cake\View\View::addHelper(0),
		map([
			'Bake.Bake' => \Bake\View\Helper\BakeHelper::class,
			'Bake.DocBlock' => \Bake\View\Helper\DocBlockHelper::class,
			'BootstrapUI.Breadcrumbs' => \BootstrapUI\View\Helper\BreadcrumbsHelper::class,
			'BootstrapUI.Flash' => \BootstrapUI\View\Helper\FlashHelper::class,
			'BootstrapUI.Form' => \BootstrapUI\View\Helper\FormHelper::class,
			'BootstrapUI.Html' => \BootstrapUI\View\Helper\HtmlHelper::class,
			'BootstrapUI.Paginator' => \BootstrapUI\View\Helper\PaginatorHelper::class,
			'Breadcrumbs' => \Cake\View\Helper\BreadcrumbsHelper::class,
			'DebugKit.Credentials' => \DebugKit\View\Helper\CredentialsHelper::class,
			'DebugKit.SimpleGraph' => \DebugKit\View\Helper\SimpleGraphHelper::class,
			'DebugKit.Toolbar' => \DebugKit\View\Helper\ToolbarHelper::class,
			'Flash' => \Cake\View\Helper\FlashHelper::class,
			'Form' => \Cake\View\Helper\FormHelper::class,
			'Html' => \Cake\View\Helper\HtmlHelper::class,
			'IdeHelper.DocBlock' => \IdeHelper\View\Helper\DocBlockHelper::class,
			'Migrations.Migration' => \Migrations\View\Helper\MigrationHelper::class,
			'Number' => \Cake\View\Helper\NumberHelper::class,
			'Paginator' => \Cake\View\Helper\PaginatorHelper::class,
			'Templating.Form' => \Templating\View\Helper\FormHelper::class,
			'Templating.Html' => \Templating\View\Helper\HtmlHelper::class,
			'Templating.Icon' => \Templating\View\Helper\IconHelper::class,
			'Templating.IconSnippet' => \Templating\View\Helper\IconSnippetHelper::class,
			'Templating.Templating' => \Templating\View\Helper\TemplatingHelper::class,
			'Text' => \Cake\View\Helper\TextHelper::class,
			'Time' => \Cake\View\Helper\TimeHelper::class,
			'Url' => \Cake\View\Helper\UrlHelper::class,
		]),
	);

	expectedArguments(
		\Cake\View\View::element(),
		0,
		'BootstrapUI.flash/default',
		'Cake/TwigView.twig_panel',
		'DebugKit.cache_panel',
		'DebugKit.deprecations_panel',
		'DebugKit.environment_panel',
		'DebugKit.history_panel',
		'DebugKit.include_panel',
		'DebugKit.log_panel',
		'DebugKit.mail_panel',
		'DebugKit.packages_panel',
		'DebugKit.plugins_panel',
		'DebugKit.preview_header',
		'DebugKit.request_panel',
		'DebugKit.routes_panel',
		'DebugKit.session_panel',
		'DebugKit.sql_log_panel',
		'DebugKit.timer_panel',
		'DebugKit.variables_panel',
		'flash/default',
		'flash/error',
		'flash/info',
		'flash/success',
		'flash/warning',
	);

	override(
		\Cake\View\View::loadHelper(0),
		map([
			'Bake.Bake' => \Bake\View\Helper\BakeHelper::class,
			'Bake.DocBlock' => \Bake\View\Helper\DocBlockHelper::class,
			'BootstrapUI.Breadcrumbs' => \BootstrapUI\View\Helper\BreadcrumbsHelper::class,
			'BootstrapUI.Flash' => \BootstrapUI\View\Helper\FlashHelper::class,
			'BootstrapUI.Form' => \BootstrapUI\View\Helper\FormHelper::class,
			'BootstrapUI.Html' => \BootstrapUI\View\Helper\HtmlHelper::class,
			'BootstrapUI.Paginator' => \BootstrapUI\View\Helper\PaginatorHelper::class,
			'Breadcrumbs' => \Cake\View\Helper\BreadcrumbsHelper::class,
			'DebugKit.Credentials' => \DebugKit\View\Helper\CredentialsHelper::class,
			'DebugKit.SimpleGraph' => \DebugKit\View\Helper\SimpleGraphHelper::class,
			'DebugKit.Toolbar' => \DebugKit\View\Helper\ToolbarHelper::class,
			'Flash' => \Cake\View\Helper\FlashHelper::class,
			'Form' => \Cake\View\Helper\FormHelper::class,
			'Html' => \Cake\View\Helper\HtmlHelper::class,
			'IdeHelper.DocBlock' => \IdeHelper\View\Helper\DocBlockHelper::class,
			'Migrations.Migration' => \Migrations\View\Helper\MigrationHelper::class,
			'Number' => \Cake\View\Helper\NumberHelper::class,
			'Paginator' => \Cake\View\Helper\PaginatorHelper::class,
			'Templating.Form' => \Templating\View\Helper\FormHelper::class,
			'Templating.Html' => \Templating\View\Helper\HtmlHelper::class,
			'Templating.Icon' => \Templating\View\Helper\IconHelper::class,
			'Templating.IconSnippet' => \Templating\View\Helper\IconSnippetHelper::class,
			'Templating.Templating' => \Templating\View\Helper\TemplatingHelper::class,
			'Text' => \Cake\View\Helper\TextHelper::class,
			'Time' => \Cake\View\Helper\TimeHelper::class,
			'Url' => \Cake\View\Helper\UrlHelper::class,
		]),
	);

	expectedArguments(
		\Cake\View\ViewBuilder::addHelper(),
		0,
		'Bake.Bake',
		'Bake.DocBlock',
		'BootstrapUI.Breadcrumbs',
		'BootstrapUI.Flash',
		'BootstrapUI.Form',
		'BootstrapUI.Html',
		'BootstrapUI.Paginator',
		'Breadcrumbs',
		'DebugKit.Credentials',
		'DebugKit.SimpleGraph',
		'DebugKit.Toolbar',
		'Flash',
		'Form',
		'Html',
		'IdeHelper.DocBlock',
		'Migrations.Migration',
		'Number',
		'Paginator',
		'Templating.Form',
		'Templating.Html',
		'Templating.Icon',
		'Templating.IconSnippet',
		'Templating.Templating',
		'Text',
		'Time',
		'Url',
	);

	expectedArguments(
		\Cake\View\ViewBuilder::setLayout(),
		0,
		'BootstrapUI.default',
		'DebugKit.dashboard',
		'DebugKit.mailer',
		'DebugKit.toolbar',
		'ajax',
		'default',
		'error',
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::get(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::getError(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::getInvalidField(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::getOriginal(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::has(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::hasValue(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::isDirty(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::isEmpty(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::setDirty(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Panel::setError(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Panel'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::get(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::getError(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::getInvalidField(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::getOriginal(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::has(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::hasValue(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::isDirty(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::isEmpty(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::setDirty(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\DebugKit\Model\Entity\Request::setError(),
		0,
		argumentsSet('entityFields:DebugKit\Model\Entity\Request'),
	);

	expectedArguments(
		\Migrations\AbstractMigration::table(),
		0,
		argumentsSet('tableNames'),
	);

	expectedArguments(
		\Migrations\AbstractSeed::table(),
		0,
		argumentsSet('tableNames'),
	);

	expectedArguments(
		\Migrations\Table::addColumn(),
		0,
		argumentsSet('columnNames'),
	);

	expectedArguments(
		\Migrations\Table::addColumn(),
		1,
		argumentsSet('columnTypes'),
	);

	expectedArguments(
		\Migrations\Table::changeColumn(),
		0,
		argumentsSet('columnNames'),
	);

	expectedArguments(
		\Migrations\Table::changeColumn(),
		1,
		argumentsSet('columnTypes'),
	);

	expectedArguments(
		\Migrations\Table::hasColumn(),
		0,
		argumentsSet('columnNames'),
	);

	expectedArguments(
		\Migrations\Table::removeColumn(),
		0,
		argumentsSet('columnNames'),
	);

	expectedArguments(
		\Migrations\Table::renameColumn(),
		0,
		argumentsSet('columnNames'),
	);

	expectedArguments(
		\Migrations\Table::renameColumn(),
		1,
		argumentsSet('columnNames'),
	);

	expectedArguments(
		\Phinx\Seed\AbstractSeed::table(),
		0,
		argumentsSet('tableNames'),
	);

	expectedArguments(
		\Templating\View\Helper\IconHelper::render(),
		0,
		argumentsSet('icons'),
	);

	expectedArguments(
		\__d(),
		0,
		'bake',
		'bootstrap_u_i',
		'cake',
		'cake/twig_view',
		'debug_kit',
		'ide_helper',
		'migrations',
		'templating',
	);

	expectedArguments(
		\env(),
		0,
		'APACHE_SITE_TEMPLATE',
		'BASH_ENV',
		'CAROOT',
		'CGI_MODE',
		'COLUMNS',
		'COMPOSER_ALLOW_SUPERUSER',
		'COMPOSER_BINARY',
		'COMPOSER_CACHE_DIR',
		'COMPOSER_PROCESS_TIMEOUT',
		'CONTENT_LENGTH',
		'CONTENT_TYPE',
		'COREPACK_ENABLE_DOWNLOAD_PROMPT',
		'COREPACK_HOME',
		'DDEV_COMPOSER_ROOT',
		'DDEV_DATABASE',
		'DDEV_DATABASE_FAMILY',
		'DDEV_DOCROOT',
		'DDEV_FILES_DIR',
		'DDEV_FILES_DIRS',
		'DDEV_HOSTNAME',
		'DDEV_MUTAGEN_ENABLED',
		'DDEV_PHP_VERSION',
		'DDEV_PRIMARY_URL',
		'DDEV_PROJECT',
		'DDEV_PROJECT_TYPE',
		'DDEV_ROUTER_HTTPS_PORT',
		'DDEV_ROUTER_HTTP_PORT',
		'DDEV_SITENAME',
		'DDEV_TLD',
		'DDEV_VERSION',
		'DDEV_WEBSERVER_TYPE',
		'DDEV_WEB_ENTRYPOINT',
		'DDEV_XDEBUG_ENABLED',
		'DEBIAN_FRONTEND',
		'DEPLOY_NAME',
		'DOCKER_IP',
		'DOCROOT',
		'DOCUMENT_ROOT',
		'DOCUMENT_URI',
		'DRUSH_OPTIONS_URI',
		'GATEWAY_INTERFACE',
		'GIT_ASKPASS',
		'GOARCH',
		'GOOS',
		'HISTFILE',
		'HOME',
		'HOSTNAME',
		'HOST_DOCKER_INTERNAL_IP',
		'HTTPS',
		'HTTPS_EXPOSE',
		'HTTP_ACCEPT',
		'HTTP_ACCEPT_ENCODING',
		'HTTP_ACCEPT_LANGUAGE',
		'HTTP_CONNECTION',
		'HTTP_COOKIE',
		'HTTP_EXPOSE',
		'HTTP_HOST',
		'HTTP_USER_AGENT',
		'IS_DDEV_PROJECT',
		'LANG',
		'LANGUAGE',
		'LINES',
		'LS_COLORS',
		'MH_SMTP_BIND_ADDR',
		'MYSQL_HISTFILE',
		'MYSQL_PWD',
		'NGINX_SITE_TEMPLATE',
		'NODE_EXTRA_CA_CERTS',
		'NVM_CD_FLAGS',
		'NVM_DIR',
		'NVM_RC_VERSION',
		'PATH',
		'PATH_TRANSLATED',
		'PGDATABASE',
		'PGHOST',
		'PGPASSWORD',
		'PGUSER',
		'PHP_BINARY',
		'PHP_DEFAULT_VERSION',
		'PHP_IDE_CONFIG',
		'PHP_SELF',
		'PLATFORMSH_CLI_UPDATES_CHECK',
		'PWD',
		'QUERY_STRING',
		'REDIRECT_STATUS',
		'REMOTE_ADDR',
		'REMOTE_PORT',
		'REQUEST_METHOD',
		'REQUEST_SCHEME',
		'REQUEST_TIME',
		'REQUEST_TIME_FLOAT',
		'REQUEST_URI',
		'SCRIPT_FILENAME',
		'SCRIPT_NAME',
		'SERVER_NAME',
		'SERVER_PORT',
		'SERVER_PROTOCOL',
		'SHELL_VERBOSITY',
		'SHLVL',
		'SSH_AUTH_SOCK',
		'TERM',
		'TERMINUS_CACHE_DIR',
		'TERMINUS_HIDE_UPDATE_MESSAGE',
		'TZ',
		'USER',
		'VIRTUAL_HOST',
		'XHPROF_OUTPUT_DIR',
		'argc',
		'argv',
		'npm_config_cache',
	);

	expectedArguments(
		\urlArray(),
		0,
		argumentsSet('routePaths'),
	);

	registerArgumentsSet(
		'cacheEngines',
		'_cake_model_',
		'_cake_translations_',
		'default',
	);

	registerArgumentsSet(
		'columnNames',
		'content',
		'created',
		'id',
		'modified',
		'status',
		'title',
	);

	registerArgumentsSet(
		'columnTypes',
		'biginteger',
		'binary',
		'binaryuuid',
		'bit',
		'blob',
		'boolean',
		'char',
		'date',
		'datetime',
		'decimal',
		'double',
		'enum',
		'float',
		'geometry',
		'integer',
		'json',
		'linestring',
		'longblob',
		'mediumblob',
		'mediuminteger',
		'point',
		'polygon',
		'set',
		'smallinteger',
		'string',
		'text',
		'time',
		'timestamp',
		'tinyblob',
		'tinyinteger',
		'uuid',
		'varbinary',
		'year',
	);

	registerArgumentsSet(
		'configureKeys',
		'App',
		'App.base',
		'App.cssBaseUrl',
		'App.defaultLocale',
		'App.defaultTimezone',
		'App.dir',
		'App.encoding',
		'App.fullBaseUrl',
		'App.imageBaseUrl',
		'App.jsBaseUrl',
		'App.namespace',
		'App.paths',
		'App.paths.locales',
		'App.paths.plugins',
		'App.paths.templates',
		'App.webroot',
		'App.wwwRoot',
		'Asset',
		'DebugKit',
		'DebugKit.forceEnable',
		'DebugKit.ignoreAuthorization',
		'DebugKit.safeTld',
		'Debugger',
		'Debugger.editor',
		'Error',
		'Error.errorLevel',
		'Error.ignoredDeprecationPaths',
		'Error.log',
		'Error.skipLog',
		'Error.trace',
		'Icon',
		'Icon.sets',
		'Icon.sets.fas',
		'Icon.sets.fas.class',
		'Icon.sets.fas.path',
		'IdeHelper',
		'IdeHelper.arrayAsGenerics',
		'IdeHelper.generatorTasks',
		'IdeHelper.objectAsGenerics',
		'IdeHelper.templateCollectionObject',
		'Migrations',
		'Migrations.backend',
		'Security',
		'Session',
		'Session.defaults',
		'debug',
		'plugins',
		'plugins.Bake',
		'plugins.BootstrapUI',
		'plugins.Cake/TwigView',
		'plugins.DebugKit',
		'plugins.IdeHelper',
		'plugins.Migrations',
		'plugins.Templating',
	);

	registerArgumentsSet(
		'entityFields:App\Model\Entity\Article',
		'content',
		'created',
		'id',
		'modified',
		'status',
		'title',
	);

	registerArgumentsSet(
		'entityFields:DebugKit\Model\Entity\Panel',
		'content',
		'element',
		'id',
		'panel',
		'request',
		'request_id',
		'summary',
		'title',
	);

	registerArgumentsSet(
		'entityFields:DebugKit\Model\Entity\Request',
		'content_type',
		'id',
		'method',
		'panels',
		'requested_at',
		'status_code',
		'url',
	);

	registerArgumentsSet(
		'icons',
		'address-book',
		'address-card',
		'bell',
		'bell-slash',
		'bookmark',
		'building',
		'calendar',
		'calendar-check',
		'calendar-days',
		'calendar-minus',
		'calendar-plus',
		'calendar-xmark',
		'chart-bar',
		'chess-bishop',
		'chess-king',
		'chess-knight',
		'chess-pawn',
		'chess-queen',
		'chess-rook',
		'circle',
		'circle-check',
		'circle-dot',
		'circle-down',
		'circle-left',
		'circle-pause',
		'circle-play',
		'circle-question',
		'circle-right',
		'circle-stop',
		'circle-up',
		'circle-user',
		'circle-xmark',
		'clipboard',
		'clock',
		'clone',
		'closed-captioning',
		'comment',
		'comment-dots',
		'comments',
		'compass',
		'copy',
		'copyright',
		'credit-card',
		'envelope',
		'envelope-open',
		'eye',
		'eye-slash',
		'face-angry',
		'face-dizzy',
		'face-flushed',
		'face-frown',
		'face-frown-open',
		'face-grimace',
		'face-grin',
		'face-grin-beam',
		'face-grin-beam-sweat',
		'face-grin-hearts',
		'face-grin-squint',
		'face-grin-squint-tears',
		'face-grin-stars',
		'face-grin-tears',
		'face-grin-tongue',
		'face-grin-tongue-squint',
		'face-grin-tongue-wink',
		'face-grin-wide',
		'face-grin-wink',
		'face-kiss',
		'face-kiss-beam',
		'face-kiss-wink-heart',
		'face-laugh',
		'face-laugh-beam',
		'face-laugh-squint',
		'face-laugh-wink',
		'face-meh',
		'face-meh-blank',
		'face-rolling-eyes',
		'face-sad-cry',
		'face-sad-tear',
		'face-smile',
		'face-smile-beam',
		'face-smile-wink',
		'face-surprise',
		'face-tired',
		'fas:address-book',
		'fas:address-card',
		'fas:bell',
		'fas:bell-slash',
		'fas:bookmark',
		'fas:building',
		'fas:calendar',
		'fas:calendar-check',
		'fas:calendar-days',
		'fas:calendar-minus',
		'fas:calendar-plus',
		'fas:calendar-xmark',
		'fas:chart-bar',
		'fas:chess-bishop',
		'fas:chess-king',
		'fas:chess-knight',
		'fas:chess-pawn',
		'fas:chess-queen',
		'fas:chess-rook',
		'fas:circle',
		'fas:circle-check',
		'fas:circle-dot',
		'fas:circle-down',
		'fas:circle-left',
		'fas:circle-pause',
		'fas:circle-play',
		'fas:circle-question',
		'fas:circle-right',
		'fas:circle-stop',
		'fas:circle-up',
		'fas:circle-user',
		'fas:circle-xmark',
		'fas:clipboard',
		'fas:clock',
		'fas:clone',
		'fas:closed-captioning',
		'fas:comment',
		'fas:comment-dots',
		'fas:comments',
		'fas:compass',
		'fas:copy',
		'fas:copyright',
		'fas:credit-card',
		'fas:envelope',
		'fas:envelope-open',
		'fas:eye',
		'fas:eye-slash',
		'fas:face-angry',
		'fas:face-dizzy',
		'fas:face-flushed',
		'fas:face-frown',
		'fas:face-frown-open',
		'fas:face-grimace',
		'fas:face-grin',
		'fas:face-grin-beam',
		'fas:face-grin-beam-sweat',
		'fas:face-grin-hearts',
		'fas:face-grin-squint',
		'fas:face-grin-squint-tears',
		'fas:face-grin-stars',
		'fas:face-grin-tears',
		'fas:face-grin-tongue',
		'fas:face-grin-tongue-squint',
		'fas:face-grin-tongue-wink',
		'fas:face-grin-wide',
		'fas:face-grin-wink',
		'fas:face-kiss',
		'fas:face-kiss-beam',
		'fas:face-kiss-wink-heart',
		'fas:face-laugh',
		'fas:face-laugh-beam',
		'fas:face-laugh-squint',
		'fas:face-laugh-wink',
		'fas:face-meh',
		'fas:face-meh-blank',
		'fas:face-rolling-eyes',
		'fas:face-sad-cry',
		'fas:face-sad-tear',
		'fas:face-smile',
		'fas:face-smile-beam',
		'fas:face-smile-wink',
		'fas:face-surprise',
		'fas:face-tired',
		'fas:file',
		'fas:file-audio',
		'fas:file-code',
		'fas:file-excel',
		'fas:file-image',
		'fas:file-lines',
		'fas:file-pdf',
		'fas:file-powerpoint',
		'fas:file-video',
		'fas:file-word',
		'fas:file-zipper',
		'fas:flag',
		'fas:floppy-disk',
		'fas:folder',
		'fas:folder-closed',
		'fas:folder-open',
		'fas:font-awesome',
		'fas:futbol',
		'fas:gem',
		'fas:hand',
		'fas:hand-back-fist',
		'fas:hand-lizard',
		'fas:hand-peace',
		'fas:hand-point-down',
		'fas:hand-point-left',
		'fas:hand-point-right',
		'fas:hand-point-up',
		'fas:hand-pointer',
		'fas:hand-scissors',
		'fas:hand-spock',
		'fas:handshake',
		'fas:hard-drive',
		'fas:heart',
		'fas:hospital',
		'fas:hourglass',
		'fas:hourglass-half',
		'fas:id-badge',
		'fas:id-card',
		'fas:image',
		'fas:images',
		'fas:keyboard',
		'fas:lemon',
		'fas:life-ring',
		'fas:lightbulb',
		'fas:map',
		'fas:message',
		'fas:money-bill-1',
		'fas:moon',
		'fas:newspaper',
		'fas:note-sticky',
		'fas:object-group',
		'fas:object-ungroup',
		'fas:paper-plane',
		'fas:paste',
		'fas:pen-to-square',
		'fas:rectangle-list',
		'fas:rectangle-xmark',
		'fas:registered',
		'fas:share-from-square',
		'fas:snowflake',
		'fas:square',
		'fas:square-caret-down',
		'fas:square-caret-left',
		'fas:square-caret-right',
		'fas:square-caret-up',
		'fas:square-check',
		'fas:square-full',
		'fas:square-minus',
		'fas:square-plus',
		'fas:star',
		'fas:star-half',
		'fas:star-half-stroke',
		'fas:sun',
		'fas:thumbs-down',
		'fas:thumbs-up',
		'fas:trash-can',
		'fas:user',
		'fas:window-maximize',
		'fas:window-minimize',
		'fas:window-restore',
		'file',
		'file-audio',
		'file-code',
		'file-excel',
		'file-image',
		'file-lines',
		'file-pdf',
		'file-powerpoint',
		'file-video',
		'file-word',
		'file-zipper',
		'flag',
		'floppy-disk',
		'folder',
		'folder-closed',
		'folder-open',
		'font-awesome',
		'futbol',
		'gem',
		'hand',
		'hand-back-fist',
		'hand-lizard',
		'hand-peace',
		'hand-point-down',
		'hand-point-left',
		'hand-point-right',
		'hand-point-up',
		'hand-pointer',
		'hand-scissors',
		'hand-spock',
		'handshake',
		'hard-drive',
		'heart',
		'hospital',
		'hourglass',
		'hourglass-half',
		'id-badge',
		'id-card',
		'image',
		'images',
		'keyboard',
		'lemon',
		'life-ring',
		'lightbulb',
		'map',
		'message',
		'money-bill-1',
		'moon',
		'newspaper',
		'note-sticky',
		'object-group',
		'object-ungroup',
		'paper-plane',
		'paste',
		'pen-to-square',
		'rectangle-list',
		'rectangle-xmark',
		'registered',
		'share-from-square',
		'snowflake',
		'square',
		'square-caret-down',
		'square-caret-left',
		'square-caret-right',
		'square-caret-up',
		'square-check',
		'square-full',
		'square-minus',
		'square-plus',
		'star',
		'star-half',
		'star-half-stroke',
		'sun',
		'thumbs-down',
		'thumbs-up',
		'trash-can',
		'user',
		'window-maximize',
		'window-minimize',
		'window-restore',
	);

	registerArgumentsSet(
		'routePaths',
		'Articles::add',
		'Articles::delete',
		'Articles::edit',
		'Articles::index',
		'Articles::view',
		'DebugKit.Composer::checkDependencies',
		'DebugKit.Dashboard::index',
		'DebugKit.Dashboard::reset',
		'DebugKit.MailPreview::email',
		'DebugKit.MailPreview::index',
		'DebugKit.MailPreview::sent',
		'DebugKit.Panels::index',
		'DebugKit.Panels::latestHistory',
		'DebugKit.Panels::view',
		'DebugKit.Requests::view',
		'DebugKit.Toolbar::clearCache',
		'Pages::display',
		'Templating.Admin/Icons::conflicts',
		'Templating.Admin/Icons::index',
		'Templating.Admin/Icons::sets',
	);

	registerArgumentsSet(
		'tableNames',
		'articles',
	);

	registerArgumentsSet(
		'validationWhen',
		'create',
		'update',
	);

}
