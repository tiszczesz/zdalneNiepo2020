import AuthorList from "../../features/AuthorList/AuthorList";
import BookSummary from "../../features/BookSummary/BookSummary";
import { Book } from '../../../interfaces/book'
interface SidebarProps{
    books:Book[]
}

const Sidebar = ({books}:SidebarProps) => (
    <aside className="mt-2 mb-2">
        <h2 className="mb-4">
            O mojej aplikacji...
        </h2>
        <AuthorList books={books} />
        <BookSummary books={books} />
    </aside>
)

export default Sidebar;