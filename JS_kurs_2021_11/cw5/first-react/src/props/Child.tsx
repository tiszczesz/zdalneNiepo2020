interface ChildProps {
    cmpName: string;
}


export const Child = ({cmpName}:ChildProps) => {
    return <div>
        Witam z komponentu dziecka o nazwie {cmpName}
    </div>
}